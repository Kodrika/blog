<?php

namespace App\Services;

use App\Models\User;
use BaconQrCode\Renderer\ImageRenderer;
use BaconQrCode\Renderer\Image\SvgImageBackEnd;
use BaconQrCode\Renderer\RendererStyle\RendererStyle;
use BaconQrCode\Writer;

class TwoFactorService
{

    public function generateQRCode()
    {
        if(!(bool)config('project.twoFactorRegister')){
            abort(404);
        }
        $google2fa = app('pragmarx.google2fa');
        $user = User::find(1);
        $secret = $google2fa->generateSecretKey();
        $user->google2fa_secret = $secret;
        $user->save();
        $qr = $google2fa->getQRCodeUrl(
            config('project.name'),
            $user->email,
            $user->google2fa_secret
        );

        $writer = new Writer(
            new ImageRenderer(
                new RendererStyle(400),
                new SvgImageBackEnd()
            )
        );

        $qr = base64_encode($writer->writeString($qr));

        view()->share('qr', $qr);

        view()->share('secret', $user->google2fa_secret);
    }

}
