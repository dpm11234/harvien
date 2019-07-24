<?php
namespace App\Http\Controllers;
use Illuminate\Pagination\LengthAwarePaginator as Paginator;
use \Illuminate\Http\Response as Res;
use GuzzleHttp\Psr7\Response;

/**
 * Class ApiController
 * @package App\Modules\Api\Lesson\Controllers
 */
class ApiController extends Controller{
    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->beforeFilter('auth', ['on' => 'post']);
    }
    /**
     * @var int
     */
    protected $statusCode = Res::HTTP_OK;
    /**
     * @return mixed
     */
    public function getStatusCode()
    {
        return $this->statusCode;
    }
    /**
     * @param $message
     * @return json response
     */
    public function setStatusCode($statusCode)
    {
        $this->statusCode = $statusCode;
        return $this;
    }
    public function respondCreated($message, $data=null){
        $res = array_merge([
            'message'   => $message, 
        ], $data);
        return $this->respond($res, Res::HTTP_CREATED);
    }
    /**
     * @param Paginator $paginate
     * @param $data
     * @return mixed
     */
    protected function respondWithPagination(Paginator $paginate, $data){
        $all = $paginate->toArray();
        // $links = $link['links'];
        $data = array_merge($data, [
            'paginator' => [
                'total_count'   => $paginate->total(),
                'total_pages'   => ceil($paginate->total() / $paginate->perPage()),
                'current_page'  => $paginate->currentPage(),
                'per_page'      => $paginate->perPage(),     
                'links'         => 
                    $all['next_page_url']
            ]
        ]);
        return $this->respond($data, Res::HTTP_OK);
    }

    /**
     * @param string $message
     * @return json response
     */
    public function respondNotFound($message = 'Not Found!'){
        return $this->respond([
            'message' => $message,
        ], Res::HTTP_NOT_FOUND);
    }


    /**
     * @param string $message
     * @return json response
     */
    public function respondInternalError($message){
        return $this->respond(['message'=>$message], Res::HTTP_INTERNAL_SERVER_ERROR);
    }

    /**
     * @param string $message
     * @param array $errors
     * @return json response
     */
    public function respondValidationError($message, $errors){
        $res = [
            'message' => $message,
            'errors'  => $errors,
        ];
        return $this->respond($res, Res::HTTP_UNPROCESSABLE_ENTITY);
    }
    public function respond($data,int $status = Res::HTTP_OK, $headers = []){
        $statusStr = 'success';
        
        if($status >= 400) {
            $statusStr = 'error';
        }
        $data = array_merge([
            'status' => $statusStr,
            'status_code' => $status,
        ], $data);
        return response()->json($data, 200, $headers, JSON_UNESCAPED_UNICODE);
        // return response($data, $status, $headers);
    }
    /**
     * @param mixed $data
     * @param int $status
     * @param array $headers
     * @return json response
     */
    public function respondData($data, int $status=Res::HTTP_OK, $headers = [])
    {
        return $this->respond(['data' => $data], $status, $headers);
    }

    // /**
    //  * @param mixed $data
    //  * @param int $status
    //  * @param array $headers
    //  * @return json response
    //  */
    // // public function respondErrors($errors, int $status, $headers = []) {
    // //     return response(['errors'=> $errors], $status);
    // // }

    /**
     * @param string $message
     * @return json response
     */
    public function respondUnauthorized($message = 'Unauthorized Request!'){
        return $this->respond([
            'message' => $message,
        ], Res::HTTP_UNAUTHORIZED);
    }
}
