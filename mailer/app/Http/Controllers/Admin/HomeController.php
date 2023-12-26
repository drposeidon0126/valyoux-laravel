<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Mail;
use File;
use Swift_SmtpTransport;
use Swift_TransportException;
use Swift_Mailer;
use App\Mail\MultiMailer;

class HomeController
{
    public function index()
    {
        return view('admin.home');
    }

    public function send_email(Request $request){
        // $mail_content = "hello, SH";
        // Mail::to('sun.mount.1991@gmail.com')->send(new MultiMailer($mail_content));
        $smtp = $request->smtp;
        $mail_detail = $request->mail_detail;
        $reply_to = $request->reply_to;
        // dd($request->attachments);
        $attachments = $request->attachments ? $request->attachments: array();
        try{
            $transport = new Swift_SmtpTransport($smtp['smtp_host'], $smtp['port'], $smtp['ssl_tls']);
            $transport->setUsername($smtp['user_name']);
            $transport->setPassword($smtp['user_password']);
            $mailer = new Swift_Mailer($transport);
            Mail::setSwiftMailer($mailer);
            Mail::to($reply_to)->send(new MultiMailer($mail_detail, $attachments, $reply_to));
            // if( count(Mail::failures()) > 0 ) {

            //     foreach(Mail::failures as $email_address) {
            //         echo "$email_address <br />";
            //      }

            //  } else {
            //      echo "Mail sent successfully!";
            //  }
            return response()->json(array('success' => 'true', 'msg'=> 'Mail was sent successfully'), 200);
        } catch (Swift_TransportException $e) {
            return response()->json(array('success' => false, 'msg'=> $e->getMessage()), 200);
        } catch (Exception $e) {
            return response()->json(array('success' => false, 'msg'=> $e->getMessage()), 200);
        }
    }

    public function check_smtp(Request $request){


        try{
            $transport = new Swift_SmtpTransport($request->smtp_host, $request->port, $request->ssl_tls);;
            $transport->setUsername($request->user_name);
            $transport->setPassword($request->user_password);
            $mailer = new Swift_Mailer($transport);
            $mailer->getTransport()->start();

            // Mail::setSwiftMailer($mailer);
            // // return response()->json(array('status' => 'success', 'msg'=> 'Mail sending was successful!'), 200
            // $mail_content = "<h1>This is a Heading</h1><p>This is a paragraph.</p>";
            // // Mail::to('sun.mount.1991@gmail.com')->send(new MultiMailer($mail_content));
            // Mail::to('sun.mount.1991@gmail.com')->send(new MultiMailer($mail_content));

            return response()->json(array('success' => true, 'msg'=> 'new smtp add to send emails.'), 200);
        } catch (Swift_TransportException $e) {
            return response()->json(array('success' => false, 'msg'=> $e->getMessage()), 200);
        } catch (Exception $e) {
            return response()->json(array('success' => false, 'msg'=> $e->getMessage()), 200);
        } catch (ErrorException $e){
            return response()->json(array('success' => false, 'msg'=> $e->getMessage()), 200);
        }

    }

    public function attachments_upload(Request $request)
    {
        $path = public_path('uploads');


        // $attachment = $request->file('attachment');

        // $name = time().'.'.$attachment->getClientOriginalExtension();;

        // // create folder
        // if(!File::exists($path)) {
        //     File::makeDirectory($path, $mode = 0777, true, true);
        // }
        // $attachment->move($path, $name);

        // $filename = $path.'/'.$name;

        // try {
        //     Mail::to($input['email'])->send(new Notification($filename));
        // } catch (\Exception $e) {
        //     return redirect()->back()->with('success', $e->getMessage());
        // }

        // return redirect()->back()->with('success', 'Mail sent successfully.');

        if($request->TotalFiles > 0)
        {
            $attachments = array();
           for ($x = 0; $x < $request->TotalFiles; $x++)
           {
               if ($request->hasFile('files'.$x))
                {
                    $file = $request->file('files'.$x);
                    $name = $file->getClientOriginalName();
                    $file->move($path, $name);
                    array_push($attachments, "uploads/".$name);
                    $insert[$x]['name'] = $name;
                    $insert[$x]['path'] = $path;
                }
           }
            // return response()->json(['success'=>'Ajax Multiple fIle has been uploaded']);
            return response()->json(array('success' => true, 'msg'=> 'The attachments has been successfully uploaded.', 'attachments' => $attachments), 200);
        }
    }
}
