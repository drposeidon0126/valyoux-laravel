<?php

try {

    if (!file_exists(__DIR__ . '/../vendor/autoload.php' ))
        throw new Exception ('autoload.php does not exist');
    else
        require_once realpath(__DIR__ . '/../vendor/autoload.php');
    
    $dotenv = Dotenv\Dotenv::createImmutable(__DIR__.'/../');
    $dotenv->load();
} catch (\Throwable $th) {
    //throw $th;
}

if (!function_exists('single_image')) {
    function single_image($image, $folder)
    {
        $imageName = mt_rand() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('assets/uploads/' . $folder), $imageName);
        return 'assets/uploads/' . $folder . '/' . $imageName;
    }
}

if (!function_exists('discountPercentage')) {
    function discountPercentage($regular_price = "", $discount_price = "")
    {
        return !empty($discount_price) ? (int)((((float)$regular_price - (float)$discount_price) * 100) / (float)$regular_price) : '';
    }
}

if (!function_exists('getSingleField')) {
    function getSingleField($table, array $where, $field)
    {
        return \DB::table($table)->select($field)->where($where)->first()->$field ?? '';
    }
}

/*
 * PHP implementation of Javascript's "Array.prototype.find"
 * =========================================================
 */
if (!function_exists('array_find')) {
    function array_find(array $array, callable $callback)
    {
        foreach ($array as $key => $value) {
            if ($callback($value, $key)) {
                return $value;
            }
        }

        return false;
    }
}
function numberformat($number)
{
    $number = number_format((float)$number, 4, '.', '');
    return $number;
}
function numberformat_double($number)
{
    $number = number_format((float)$number, 6, '.', '');
    return $number;
}
function signFormat($number, $type)
{
    if ($type == 0) {
        $number = str_replace('-', '- ', numberformat($number));
    } else {
        $number = str_replace('', '+ ', numberformat($number));
    }

    return $number;
}
function artist_counter($id)
{
    $data = DB::select("SELECT (
        select count(*)
        from follow f
        where f.user_role=2 AND  f.following_id=$id
     ) artist,
     (
        select count(*)
        from follow f
        where f.user_role=4 AND  f.following_id=$id
     ) business,
     (
        select count(*)
        from follow f
        where f.user_role=3 AND f.following_id=$id
     ) investor FROM `artists` as a WHERE a.id=$id");
    return $data[0];
}
function check_role()
{
    $user_id = auth()->user()->id;
    $user = DB::select("SELECT * FROM role_user as a Where user_id = $user_id");
    return $user[0]->role_id;
}
function videoCount($video_id){
    $video_count = DB::select("SELECT count(*) as total FROM wallet Where video_id = $video_id");
    return $video_count[0]->total;
}
function artistPoints(){
    $artist_points = DB::select("SELECT * FROM artist_points");
     return $artist_points;
}
function settings(){
    $settings = DB::select("SELECT * FROM settings");
     return $settings[0];
}

function increments($stock_number, $current_stock_price, $increments){


    $i = 1;
    $total_cost = 0;
    for ($i = 0; $i < $stock_number; $i++) {
        $current_stock_price += $increments * $i;
        $total_cost = $total_cost + $current_stock_price;
    }
    return $total_cost;
}


function checkVideo($video_id){
    $user_id = auth()->user()->id;
    // $video_count = DB::select("SELECT count(*) as total FROM wallet Where video_id = $video_id AND from_user_id = $user_id");
    // $video_count = DB::select("SELECT count(*) as total FROM wallet Where video_id = $video_id AND from_user_id = $user_id");
    //    if($video_count[0]->total > 0){
    //        return true;
    //    }else{
    //        return false;
    //    }
    return false;
}

function exchangeRateNote($value = ' ')
{
    /*    $array=[
        array("Publisher Advance payment",22,18),
        array("BMW",15,13),
        array("Saab",5,2),
        array("Land Rover",17,15)
      ); */
    $array = [
        0 => ['id' => 0, 'title' => 'Valyou X Access Tokens', 'desc' => 'Payments to users'],
        1 => ['id' => 1, 'title' => 'Valyou X Presale Tokens', 'desc' => 'Presale Tokens'],
        2 => ['id' => 2, 'title' => 'Publisher Advance payment', 'desc' => 'Payments to songwriter / composer as part of a publishing deal. Paid to songwriter/composer by publishing company.'],
        3 => ['id' => 3, 'title' => 'Mechanical Royalties', 'desc' => 'Royalties generated through the Commissionsreproduction of recordings of your songs – either physical or digital. Paid to songwriter / composer by publisher, label, Harry Fox, or digital aggregator like CD Baby/TuneCore.'],
        4 => ['id' => 4, 'title' => 'Commissions', 'desc' => 'Typically a request from an ensemble, presenter, orchestra or other entity for a composer to create an original work for them.'],
        5 => ['id' => 5, 'title' => 'Public Performance (PRO) Royalties', 'desc' => 'Royalties generated when your songs are played on radio, TV, in clubs and restaurants. Paid to songwriter/composer/publisher by ASCAP/BMI/SESAC.'],
        6 => ['id' => 6, 'title' => 'Streaming Mechanical Royalties', 'desc' => 'Royalties generated when your songs are streamed on on-demand services (Rhapsody, Spotify, Rdio). Paid to publisher by Harry Fox or other mechanical licensing agent. Publisher then pays songwriter/composer.'],
        7 => ['id' => 7, 'title' => 'Composing Original Works for Broadcast', 'desc' => 'Typically a commercial request to compose an *original* jingle, soundtrack, score, or other musical work for a film, TV or cable show, or an ad agency. Paid to songwriter/composer by agency requesting the work.'],
        8 => ['id' => 8, 'title' => 'Synch Licenses', 'desc' => 'Typically involves licensing an *existing* work for use in a movie, documentary, TV, video games, internet, or a commercial. Paid to songwriters/composers either via publisher or record label, or via a direct licensing deal with the licensee (movie studio, ad agency, etc) if you are self- published.'],
        9 => ['id' => 9, 'title' => 'Sheet Music Sales', 'desc' => 'Revenue generated by the sale or licensed reproduction of songs/compositions as sheet music. Paid to songwriter/composer by publisher, or directly from purchasers if you are selling it on your website or at performances.'],
        10 => ['id' => 10, 'title' => 'Lyric Display', 'desc' => 'Revenue generated by the licensed display of song lyrics. Online lyric sites pay publishers, which then pay songwriter/composer.'],
        11 => ['id' => 11, 'title' => 'Ringtones', 'desc' => 'Revenue generated from licensing your songs/compositions for use as ringtones. Paid to songwriter/composer via your publisher, your label or Harry Fox.'],
        12 => ['id' => 12, 'title' => 'Songwriter Awards Programs', 'desc' => 'Awards given by ASCAP and BMI Foundations to writer members of any genre whose performances are primarily in venues outside of broadcast media.'],
        13 => ['id' => 13, 'title' => 'Pulishber Settlement', 'desc' => 'Payment from publishers to writers for litigation settlements.'],
        14 => ['id' => 14, 'title' => 'Record Label Advance', 'desc' => 'Paid to recording artist as part of signing a deal.'],
        15 => ['id' => 15, 'title' => 'Record Label Support', 'desc' => 'Record Label Support'],
        16 => ['id' => 16, 'title' => 'Retail Sales', 'desc' => 'Revenue generated from selling physical recordings in retail stores or via mailorder. Paid to recording artist/performer by your label, or services like CD Baby or Bandcamp that help musicians sell physical product.'],
        17 => ['id' => 17, 'title' => 'Digital Sales', 'desc' => 'Revenue generated from selling recordings digitally/online as permanent downloads. Paid to recording artist/performer by your label, or digital aggregator like CD Baby or TuneCore, or directly from fans via services like Bandcamp.'],
        18 => ['id' => 18, 'title' => 'Sales at Shows', 'desc' => 'Revenue generated from selling recordings at shows/live performances. Paid to recording artist/performer directly by fans.'],
        19 => ['id' => 19, 'title' => 'Interactive Service Payments', 'desc' => 'Revenue generated when your recordings are streamed on on-demand services (Rhapsody, Spotify, Rdio). Paid to recording artist/performer by your label, or digital aggregator like CD Baby or TuneCore.'],
        20 => ['id' => 20, 'title' => 'Digital Performance Royalties', 'desc' => 'Revenue generated when your sound recordings are played on internet radio, Sirius XM, Pandora. Paid to performers by SoundExchange.'],
        21 => ['id' => 21, 'title' => 'Master Use Synch Licenses', 'desc' => 'ypically involves licensing an *existing* sound recording for use in a movie, documentary, TV, video games, internet, or a commercial. License fee paid to record label and/or recording artist via a direct licensing deal with the licensee (movie studio, ad agency, etc).'],
        22 => ['id' => 22, 'title' => 'AARC Royalties', 'desc' => 'Collected for the foreign performance of your recordings.'],
        23 => ['id' => 23, 'title' => 'Neighboring Rights Royalties', 'desc' => 'Payments to songwriter / composer as part of a publishing deal. Paid to songwriter/composer by publishing company.'],
        24 => ['id' => 24, 'title' => 'Film Musicians Secondary Markets Fund', 'desc' => 'Paid to performers on recordings used in film, TV and other secondary uses by the Film Musicians’ Secondary Markets Fund.'],
        25 => ['id' => 25, 'title' => 'Sound Recording Special Payments Fund', 'desc' => 'Paid to performers for the sales of music recorded under AFM collective bargaining agreement by the Sound Recordings Special Payments Fund.'],
        26 => ['id' => 26, 'title' => 'SAG-AFTRA Contingent Scale Payments', 'desc' => 'Paid to non-royalty artists when a recording hits certain sales plateaus.'],
        27 => ['id' => 27, 'title' => 'Label Settlements', 'desc' => 'Payments from labels to recording artists for litigation settlements (MP3.com, Limewire).'],
        28 => ['id' => 28, 'title' => 'Salary as Member of Orchestra or Ensemble', 'desc' => 'Income earned as a salaried member of an orchestra band, or ensemble.'],
        29 => ['id' => 29, 'title' => 'Shows/Performance Fees', 'desc' => 'Revenue generated from playing in a live setting (for non-salaried players). Paid by concert promoter, presenter or venue to performer.'],
        30 => ['id' => 30, 'title' => 'Session Musician/Sideman Fees for Studio Work', 'desc' => 'Payments to studio musicians/freelancers/'],
        31 => ['id' => 31, 'title' => 'Session Musician/Sideman Fees for Live Work', 'desc' => 'Payments to studio musicians/freelancers/sideman for work in a live setting/on tour. Paid by label, producer or artist, depending on situation.'],
        32 => ['id' => 32, 'title' => 'Non-Featured Artist Payments', 'desc' => 'Payments from the AFM & SAG-AFTRA Intellectual Property Rights Distribution Fund, which distributes recording and performance royalties to non-featured artists.'],
        33 => ['id' => 33, 'title' => 'Music Teacher', 'desc' => 'Revenue generated from teaching your musical craft.'],
        34 => ['id' => 34, 'title' => 'Producer', 'desc' => 'Payment for producing another artists’ work in the studio or in a live setting. Paid by labels, featured artists, studios, presenters, or foundations, depending on situation.'],
        35 => ['id' => 35, 'title' => 'Honoraria or Speakers’ Fees', 'desc' => 'Payment for conducting a lecture, workshop or master class. Usually paid by school, conservatory, or presenting organization.'],
        36 => ['id' => 36, 'title' => 'Merchandise Sales', 'desc' => 'Revenue generated from selling branded merchandise (t-shirts, hoodies, posters, etc.). Paid to artist/performer by fans.'],
        37 => ['id' => 37, 'title' => 'Fan Club', 'desc' => 'Money directly from fans who are subscribing to your fan club.'],
        38 => ['id' => 38, 'title' => 'YouTube Partner Program', 'desc' => 'Shared advertising revenue, paid to partners by YouTube.'],
        39 => ['id' => 39, 'title' => 'Ad Revenue', 'desc' => 'Shared advertising revenue, paid to partners by YouTube.'],
        40 => ['id' => 40, 'title' => 'Persona Licensing', 'desc' => 'Payments from a brand that is licensing your name or likeness (video games, comic books).'],
        41 => ['id' => 41, 'title' => 'Product Endorsements', 'desc' => 'Payments or free goods from a brand for you endorsing or using their product.'],
        42 => ['id' => 42, 'title' => 'Acting', 'desc' => 'Payments for appearances in TV, commercials, movies.'],
        43 => ['id' => 43, 'title' => 'Fan Funding', 'desc' => 'Payments for appearances in TV, commercials, movies.'],
        44 => ['id' => 44, 'title' => 'Sponsorship', 'desc' => 'Corporate support for a tour, or for your band/ensemble.'],
        45 => ['id' => 45, 'title' => 'Grants', 'desc' => 'Foundation or public arts grants to support your work/project from foundations, state or federal agencies.'],
        46 => ['id' => 46, 'title' => 'Arts Administrator', 'desc' => 'Money paid to you specifically for managing the administrative aspects of a group that you are a member of.'],
    	47 => ['id' => 47, 'title' => 'Credit/Debit Card', 'desc' => 'Credit/Debit Card Transaction.'],

    ];
    return $array;
}
function dateFormat($time)
{
    $date = new DateTime($time, new DateTimeZone($_ENV['APP_TIMEZONE']));
    $date->setTimezone(new DateTimeZone(auth()->user()->timezone));
    $time= $date->format('Y/m/d H:i A');
    return $time;
}
function user_id(){
    return auth()->user()->id;
}
function time_format($datetime, $full = false) {
    $now = new DateTime;
    $ago = new DateTime($datetime);
    $diff = $now->diff($ago);

    $diff->w = floor($diff->d / 7);
    $diff->d -= $diff->w * 7;

    $string = array(
        'y' => 'year',
        'm' => 'month',
        'w' => 'week',
        'd' => 'day',
        'h' => 'hour',
        'i' => 'minute',
        's' => 'second',
    );
    foreach ($string as $k => &$v) {
        if ($diff->$k) {
            $v = $diff->$k . ' ' . $v . ($diff->$k > 1 ? 's' : '');
        } else {
            unset($string[$k]);
        }
    }

    if (!$full) $string = array_slice($string, 0, 1);
    return $string ? implode(', ', $string) . ' ago' : 'just now';
}


/**
 * Sends sms to user using Twilio's programmable sms client
 * @param String $message Body of sms
 * @param Number $recipients string or array of phone number of recepient
 */
// function sendMessage($message, $recipients)
// {
//     $account_sid = getenv("TWILIO_SID");
//     $auth_token = getenv("TWILIO_AUTH_TOKEN");
//     $twilio_number = getenv("TWILIO_NUMBER");
//     $client = new Client($account_sid, $auth_token);
//     $client->messages->create($recipients, 
//             ['from' => $twilio_number, 'body' => $message] );
// }

// 
/**
 * Send message to a selected users
 */
// public function sendCustomMessage(Request $request)
// {
//     $validatedData = $request->validate([
//         'users' => 'required|array',
//         'body' => 'required',
//     ]);
//     $recipients = $validatedData["users"];
//     // iterate over the array of recipients and send a twilio request for each
//     foreach ($recipients as $recipient) {
//         $this->sendMessage($validatedData["body"], $recipient);
//     }
//     return back()->with(['success' => "Messages on their way!"]);
// }