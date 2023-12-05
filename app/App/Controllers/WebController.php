<?php

namespace App\Controllers;

use App\Models\WebModel;

class WebController extends Controller
{
    public function index($request, $response, $args)
    {
        return $this->render($response, "Web.web", [
            "data" => [
                "cant" => 10,
                "title" => "Web",
            ]
        ]);
    }

    private function items_banner()
    {
        $webmodel = new WebModel();
        $response = $webmodel->where('art_estado', 1)->orderBy("idarticulo", "DESC")->limit(4)->get();
        $html = '';
        foreach ($response as $row) {
            $html .= '
					<div class="single_banner_slider">
                        <div class="row">
                            <div class="col-lg-5 col-md-8">
                                <div class="banner_text">
                                    <div class="banner_text_iner">
                                        <h1>' . $row['art_nombre'] . '</h1>
                                        <p>' . substr($row['art_descri'], 0, 100) . '...</p>
                                        <a href="#" class="btn_2" onclick="return add_carrito(this,' . $row['idarticulo'] . ')">Reservar</a>
                                    </div>
                                </div>
                            </div>
							<div class="banner_img d-none d-lg-block" style="max-width: 300px; right: 15%;">
								<img src="https://web.cosmobook.pe/app/img/20220103_48iV.jpg" alt="Cargando...">
							</div>
                        </div>
                    </div>
					';
        }

        return $html;
    }
}
