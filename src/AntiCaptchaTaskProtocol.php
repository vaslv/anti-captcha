<?php

namespace AndreyVaslv\AntiCaptcha;


interface AntiCaptchaTaskProtocol
{
    public function getPostData();

    public function getTaskSolution();
}
