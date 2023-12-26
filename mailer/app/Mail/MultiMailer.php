<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class MultiMailer extends Mailable
{
    use Queueable, SerializesModels;

    protected $mail_detail;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($mail_detail, $mail_attachments, $receiver_email)
    {
        $this->mail_detail = $mail_detail;
        $this->receiver_email = $receiver_email;
        $this->mail_attachments = $mail_attachments;
    }

    public function random_str(int $length = 64, string $keyspace = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ'): string {
        if ($length < 1) {
            throw new \RangeException("Length must be a positive integer");
        }
        $pieces = [];
        $max = mb_strlen($keyspace, '8bit') - 1;
        for ($i = 0; $i < $length; ++$i) {
            $pieces []= $keyspace[random_int(0, $max)];
        }
        return implode('', $pieces);
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        /* 
        $message->from($address, $name = null);
        $message->sender($address, $name = null);
        $message->to($address, $name = null);
        $message->cc($address, $name = null);
        $message->bcc($address, $name = null);
        $message->replyTo($address, $name = null);
        $message->subject($subject);
        $message->priority($level);
        $message->attach($pathToFile, array $options = []);
         */
        // return $this->view('view.name');
        // return $this->from('example@example.com', 'Example')
        // ->view('mailer.mail_template');

        // dd($this->random_str(32));
        // dd($this->mail_detail);
        $email = "";
        $template = array("[-email-]", "[-emailuser-]", "[-emaildomain-]", "[-time-]", "[-randomstring-]");
        $replace = array(
            $this->receiver_email,
            substr($this->receiver_email, 0, strrpos($this->receiver_email, '@')),
            substr(strstr($this->receiver_email, '@'), 1),
            date('m/d/Y h:i:s a'),
            $this->random_str(32)
        );
        $msg_body = str_replace($template, $replace, $this->mail_detail['msg_body']);
        $this->mail_detail['subject'] = str_replace($template, $replace, $this->mail_detail['subject']);
        
        if($this->mail_detail['sender_email'] != '' && $this->mail_detail['reply_email'] != '')
            $email = $this->subject($this->mail_detail['subject'])
            ->from($this->mail_detail['sender_email'], $this->mail_detail['sender_name'] ? $this->mail_detail['sender_name'] : null)
            ->replyTo($this->mail_detail['reply_email'], $this->mail_detail['reply_name'] ? $this->mail_detail['reply_name'] : null)        
            ->markdown('mailer.mail_template', [
                'mail_content' => $msg_body
            ]);
        elseif($this->mail_detail['sender_email'] == '' && $this->mail_detail['reply_email'] == '')
            $email = $this->subject($this->mail_detail['subject'])
            ->markdown('mailer.mail_template', [
                'mail_content' => $msg_body
            ]);
        elseif($this->mail_detail['sender_email'] != '' && $this->mail_detail['reply_email'] == '')
            $email = $this->subject($this->mail_detail['subject'])
            ->from($this->mail_detail['sender_email'], $this->mail_detail['sender_name'] ? $this->mail_detail['sender_name'] : null)
            ->markdown('mailer.mail_template', [
                'mail_content' => $msg_body
            ]);
        elseif($this->mail_detail['sender_email'] == '' && $this->mail_detail['reply_email'] != '')
            $email = $this->subject($this->mail_detail['subject'])
            ->replyTo($this->mail_detail['reply_email'], $this->mail_detail['reply_name'] ? $this->mail_detail['reply_name'] : null)
            ->markdown('mailer.mail_template', [
                'mail_content' => $msg_body
            ]);
            
            // $attachments is an array with file paths of attachments
            if(count($this->mail_attachments) > 0 ) {
                foreach ($this->mail_attachments as $filePath) {
                    // dd(public_path($filePath));
                    $email->attach(public_path($filePath));
                }
            }
            return $email;
        // 'reply_to' => ['address' => 'example@example.com', 'name' => 'App Name'],
        // return $this->view('emails.orders.shipped')->text('emails.orders.shipped_plain');
        // return $this->view('emails.orders.shipped')->with(['orderName' => $this->order->name,'orderPrice' => $this->order->price,]);
    }
}
