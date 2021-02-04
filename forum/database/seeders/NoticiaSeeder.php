<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Noticia;

class NoticiaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Noticia $noticia)
    {
        $noticia->create([
            'titulo' => 'Como voltar a se exercitar sem risco à saúde após ter covid-19',
            'descricao' => 'Levantamentos realizados ao redor do mundo calculam que até 16% dos pacientes com covid-19 apresentam algum tipo de complicação cardíaca. Os danos ao coração independem do grau da doença: mesmo os quadros mais leves podem trazer prejuízos ao sistema cardiovascular.
                O problema é que, muitas vezes, essa sequela no peito não dá sintoma algum e a pessoa só vai sentir suas consequências ao exigir um trabalho extra do sistema cardiovascular.
                Isso acontece, por exemplo, durante uma atividade física: o coração precisa bater mais para bombear sangue aos músculos e, se tiver com algum dano provocado pelo coronavírus, pode funcionar mal e até pifar.',
            'url' => 'https://i.ibb.co/xgSs5CP/ciclismo.jpg',
            'user_id' => 1
        ]);

        $noticia->create([
            'titulo' => 'Como voltar a se exercitar sem risco à saúde após ter covid-19',
            'descricao' => 'Fernando Meligeni respondeu também sobre "o jogo que mais o irritou", e citou a derrota na semifinal de Roland Garros de 1999, para Medvedev. "Podia ter chegado na final. Obviamente, sempre vou dar méritos ao adversário, mas, sair da quadra e perceber que você fez escolhas erradas e que valia tanto, é um jogo que fica remoendo.',
            'url' => 'https://i.ibb.co/x5r3VKB/tenis.jpg',
            'user_id' => 1
        ]);

        $noticia->create([
            'titulo' => 'Como voltar a se exercitar sem risco à saúde após ter covid-19',
            'descricao' => 'Os torneios pré-olímpicos das maratonas aquáticas, saltos ornamentais e nado artístico já têm data pra acontecer. Todas as classificatórias haviam sido adiadas por conta do avanço da pandemia do novo coronavírus.',
            'url' => 'https://i.ibb.co/hXGy9Yj/natacao.jpg',
            'user_id' => 1
        ]);
    }
}
