<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Image;
use App\Models\TextField;
use App\Models\Title;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Title::create([
            'key' => '1ST_PAGE_TITLE',
            'value' => 'Ana Rita Rodrigues',
        ]);

        Title::create([
            'key' => '1ST_PAGE_SUBTITLE',
            'value' => 'Arquitetura | Design | Obra',
        ]);

        Title::create([
            'key' => '2ND_PAGE_TITLE',
            'value' => 'Ana Rita Rodrigues',
        ]);

        Title::create([
            'key' => '3RD_PAGE_TITLE',
            'value' => 'Arquitetura',
        ]);

        Title::create([
            'key' => '3RD_PAGE_SUBTITLE_1',
            'value' => 'Consultoria',
        ]);

        Title::create([
            'key' => '3RD_PAGE_SUBTITLE_2',
            'value' => 'Licenciamentos',
        ]);

        Title::create([
            'key' => '3RD_PAGE_SUBTITLE_3',
            'value' => 'Legalizações',
        ]);

        Title::create([
            'key' => '4TH_PAGE_TITLE',
            'value' => 'Design | Obra',
        ]);

        Title::create([
            'key' => '4TH_PAGE_SUBTITLE_1',
            'value' => '3D',
        ]);

        Title::create([
            'key' => '4TH_PAGE_SUBTITLE_2',
            'value' => 'Gestão de Obra',
        ]);

        Title::create([
            'key' => '5TH_PAGE_TITLE',
            'value' => 'Portefólio',
        ]);

        Title::create([
            'key' => '5TH_PAGE_SUBTITLE_1',
            'value' => 'CASA VISTA RIO | 2022',
        ]);

        Title::create([
            'key' => '6TH_PAGE_TITLE',
            'value' => 'Contactos',
        ]);

        Title::create([
            'key' => '6TH_PAGE_SUBTITLE',
            'value' => 'Escritórios',
        ]);

        Title::create([
            'key' => '6TH_PAGE_SUBTITLE_1',
            'value' => 'Marinha Grande',
        ]);

        Title::create([
            'key' => '6TH_PAGE_SUBTITLE_2',
            'value' => 'Porto de Mós',
        ]);

        TextField::create([
            'key' => '2ND_PAGE_BIO',
            'value' => "Formada pela Universidade de Coimbra, no departamento de Arquitetura da Faculdade de Ciências e Tecnologias, é membro da Ordem dos Arquitetos desde o ano 2021.\nTrabalha há alguns anos na área de decoração de interiores, desenvolvendo pinturas e produtos para decoração dos espaços.\nParalelamente, pratica a sua profissão de Arquitetura, tendo um estilo eclético e desenvolvendo soluções sempre à medida do cliente.",
        ]);

        TextField::create([
            'key' => '3RD_PAGE_TEXT_1',
            'value' => "Análise de Terrenos tendo em consideração a rentabilidade dos mesmos através da edificação.\nAnálise de imobiliário, estado de conservação e perspetiva de custos de obras.",
        ]);

        TextField::create([
            'key' => '3RD_PAGE_TEXT_2',
            'value' => "Licenciamento de moradias, prédios, hotelaria ou outros empreendimentos diversos.\nElaboração de destaques, propriedade horizontal e outros procedimentos diversos anexos ao licenciamento.",
        ]);

        TextField::create([
            'key' => '3RD_PAGE_TEXT_3',
            'value' => "Legalizações de habitações em não conformidade, de forma a adquirir nova licença de utilização e permitir a sua venda ou conformidade perante a legislação atual.",
        ]);

        TextField::create([
            'key' => '4TH_PAGE_TEXT_1',
            'value' => "Produção de imagens 3D com proposta de Arquitetura e/ou decoração de interiores.\nCriação de propostas de reabilitação de edifícios recorrendo ao 3D para visualização do produto final.",
        ]);

        TextField::create([
            'key' => '4TH_PAGE_TEXT_2',
            'value' => "Possibilidade de Gestão da obra de projetos produzidos pelo gabinete. A gestão da obra e a atenção ao cumprimento do projeto torna-se um fator diferencial que o dono de obra valoriza pois garante que a obra cumpre aquilo que foi idealizado por si e pelo arquiteto.",
        ]);

        TextField::create([
            'key' => '5TH_PAGE_DESCRIPTION_1',
            'value' => "Ferreira do Zezêre",
        ]);

        TextField::create([
            'key' => '6TH_PAGE_TEXT_1',
            'value' => "Rua Mãe d’Agua n º14, 1º Direito",
        ]);

        TextField::create([
            'key' => '6TH_PAGE_TEXT_2',
            'value' => "Rua 5 de Outubro nº8, São João Batista",
        ]);

        TextField::create([
            'key' => '6TH_PAGE_NAME',
            'value' => "Ana Rita Rodrigues",
        ]);

        TextField::create([
            'key' => '6TH_PAGE_EMAIL',
            'value' => "anarodrigues@elementar.pt",
        ]);

        TextField::create([
            'key' => '6TH_PAGE_PHONE',
            'value' => "+351 914 970 344",
        ]);

        Image::create([
            'key' => '2ND_PAGE_IMAGE',
            'image_path' => 'foto.jpg',
        ]);

        Image::create([
            'key' => '5TH_PAGE_IMAGE_1',
            'image_path' => 'casa.jpg',
        ]);
    }
}
