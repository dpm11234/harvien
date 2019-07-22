<?php
namespace App\Http\Controllers;
use Illuminate\Pagination\LengthAwarePaginator as Paginator;
use Response;
use \Illuminate\Http\Response as Res;

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
        $res = [
            'message'   => $message, 
            'data'      => $data
        ];
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
        return $this->respondData($data, Res::HTTP_OK);
    }
    public function respondNotFound($message = 'Not Found!'){
        return $this->respond([
            'message' => $message,
        ], Res::HTTP_NOT_FOUND);
    }
    public function respondInternalError($message){
        return $this->respond(['message'=>$message], Res::HTTP_INTERNAL_SERVER_ERROR);
    }
    public function respondValidationError($message, $errors){
        $res = [
            'message' => $message,
            'errors'  => $errors,
        ];
        return $this->respond($res, Res::HTTP_UNPROCESSABLE_ENTITY);
    }
    public function respond($data,int $status = Res::HTTP_OK, $headers = []){
        $statusStr = 'success';
        
        if($status >= 300) {
            $statusStr = 'error';
        }
        $data = array_merge([
            'status' => $statusStr,
            'status_code' => $status,
        ], $data);
        return response($data, $status, $headers);
    }
    public function respondData($data, int $status=Res::HTTP_OK, $headers = [])
    {
        return $this->respond(['data' => $data], $status, $headers);
    }
    public function respondErrors($errors, int $status, $headers = []) {
        return response(['errors'=> $errors], $status);
    }
    // public function respondWithError($message){
    //     return $this->respond([
    //         'status' => 'error',
    //         'status_code' => Res::HTTP_UNAUTHORIZED,
    //         'message' => $message,
    //     ]);

    //     return 
    // }
}
