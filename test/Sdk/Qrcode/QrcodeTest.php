<?php
/**
 * Created by PhpStorm.
 * User: marsnowxiao
 * Date: 2017/4/10
 * Time: 下午4:37
 */
namespace Zan\Framework\Test\Sdk\Qrcode;

use Zan\Framework\Testing\TaskTest;
use Zan\Framework\Utilities\Types\Qrcode;

class QrcodeTest extends TaskTest {
    public function taskGenerateQrcode()
    {
        $text = "youzan";
        $size = '270x270';
        try {
            $qrCode = (yield Qrcode::create($text, $size, true));
        } catch (\Exception $e) {
            var_dump($e->getMessage());
        }

        $this->assertStringStartsWith("data", $qrCode, "qrCode get failed");
    }
}