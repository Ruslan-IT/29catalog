<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Models\SiteSetting;

class ContactController extends Controller
{
    public function send(Request $request)
    {


        // Валидация данных
        $data = $request->validate([
            'name'    => 'required|string|max:255',
            'email'   => 'required|email',
            'subject' => 'required|string|max:255',
            'phone' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        // Получаем email администратора
        $adminEmail = SiteSetting::first()?->email ?? config('mail.from.address');

        // Переименовываем 'message' чтобы не конфликтовать с $message в Blade
        $mailData = [
            'name'       => $data['name'],
            'email'      => $data['email'],
            'subject'    => $data['subject'],
            'phone'    => $data['phone'],
            'userMessage'=> $data['message'], // <- ключ изменен
        ];



        // Отправка письма
        Mail::send('emails.contact', $mailData, function ($mail) use ($adminEmail, $data) {
            $mail->to($adminEmail)
                ->replyTo($data['email'])
                ->subject($data['subject']);
        });

        return response()->json([
            'message' => 'Thank you! We will contact you soon.',
        ]);
    }
}
