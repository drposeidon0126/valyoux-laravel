<?php
    namespace App\Http\Controllers;

    use App\Http\Controllers\Controller;

    class FunctionController extends Controller {
        public function __construct()
        {
            
        }
        public function sendResponse($status, $statusCode = 201, $message = null, $data = null )
        {
            $response = ['status' => $status == 0 ? 'success' : 'failed'];
            if (!is_null($message)) {
                $response['message'] = $message;
            }
            if ( !is_null($data)){
                $response['data'] = $data;
            }
            return response()->json($response, $statusCode);
        }
        
        function randomStringGenerator($num){
            $globalRandomStr = config("global.AlphaNum");
            $resultStr = "";
            $len = strlen($globalRandomStr);
            for ($i = 0 ; $i < $num ; $i ++ ){
                $resultStr .= $globalRandomStr[rand(0,$len)];
            }
            return $resultStr ;
        }
    }
?>