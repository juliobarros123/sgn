<?php
/* Este sistema esta protegido pelos direitos autoriais do Instituto de Telecomunicações criado ao
 abrigo do decreto executivo conjunto nº29/85 de 29 de Abril,
 dos Ministérios da Educação e dos Transportes e Comunicações,
publicado no Diário da República, 1ª série nº 35/85, nos termos
 do artigo 62º da Lei Constitucional.

contactos:
site:www.itel.gov.ao
Telefone I: +244 931 313 333
Telefone II: +244 997 788 768
Telefone III: +244 222 381 640
Email I: secretariaitel@hotmail.com
Email II: geral@itel.gov.ao*/
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cabecalho extends Model
{
    use HasFactory;
    protected $table = 'cabecalhos';
    protected $fillable = ['id', 'vc_logo', 'vc_ensignia', 'vc_escola', 'vc_acronimo', 'vc_nif', 'vc_republica', 'vc_ministerio', 'vc_endereco', 'it_telefone', 'vc_email', 'vc_nomeDirector'];
}
