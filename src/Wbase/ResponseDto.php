<?php
/**
 * @author PanXd
 * @Date   2020-09-24
 */

namespace Wbase;

use Illuminate\Contracts\Support\Responsable;

class ResponseDto implements Responsable
{
    private $code;
    private $message;
    private $data;

    public function __construct($code, $message, $data = [])
    {
        $this->code = $code;
        $this->message = $message;
        $this->data = $data;
    }

    public static function create($code, $message, $data = [])
    {
        return new self($code, $message, $data);
    }

    public function toResponse($request)
    {
        return [
            'code' => $this->code,
            'message' => $this->message,
            'data' => $this->data,
        ];
    }
}
