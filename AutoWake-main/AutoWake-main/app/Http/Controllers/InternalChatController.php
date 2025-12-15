<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class InternalChatController extends Controller
{
    /**
     * Exibe a tela do chat interno
     */
    public function index()
    {
        return view('internal_chat');
    }

    /**
     * Retorna todas as mensagens em JSON
     */
    public function getMessages()
    {
        try {
            $messages = Message::with('user')
                ->orderBy('created_at', 'asc')
                ->get();

            return response()->json($messages);

        } catch (\Exception $e) {
            return response()->json(['error' => 'Erro ao carregar mensagens', 'details' => $e->getMessage()], 500);
        }
    }

    /**
     * Salva nova mensagem
     */
    public function sendMessage(Request $request)
    {
        $request->validate([
            'message' => 'required|string|max:1000',
        ]);

        try {
            Message::create([
                'user_id' => Auth::id(),
                'message' => $request->message,
            ]);

            return response()->json(['success' => true]);

        } catch (\Exception $e) {
            return response()->json(['error' => 'Erro ao enviar mensagem', 'details' => $e->getMessage()], 500);
        }
    }
}
