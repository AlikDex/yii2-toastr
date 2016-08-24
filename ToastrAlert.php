<?php

namespace alikdex\yii2-toastr;

use Yii;
use alikdex\yii2-toastr\Toastr;

class ToastrAlert extends \yii\base\Widget
{
    /**
     * @var array the alert types configuration for the flash messages.
     */
    public $alertTypes = [
        'error'   => 'error',
        'danger'  => 'error',
        'success' => 'success',
        'info'    => 'info',
        'warning' => 'warning'
    ];
    
    public $options = [];
    
    public function init()
    {
        parent::init();

        $session = Yii::$app->getSession();
        $flashes = $session->getAllFlashes();

        foreach ($flashes as $type => $data) {

            if (isset($this->alertTypes[$type])) {
                $data = (array) $data;

                foreach ($data as $message) {
                    echo Toastr::widget([
                        'toastType' => $this->alertTypes[$type],
                        'message' => $message,
                        'options' => $this->options,
                    ]);
                }

                $session->removeFlash($type);
            }
        }
    }
}
