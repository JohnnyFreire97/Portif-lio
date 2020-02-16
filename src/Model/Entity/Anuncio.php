<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Anuncio Entity
 *
 * @property int $id
 * @property string $nome
 * @property string $descricao
 * @property string $logradouro
 * @property int $numero
 * @property string|null $complemento
 * @property string $bairro
 * @property int $cep
 * @property int $anunciantes_id
 * @property int $categorias_id
 *
 * @property \App\Model\Entity\Anunciante $anunciante
 * @property \App\Model\Entity\Categoria $categoria
 */
class Anuncio extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'nome' => true,
        'descricao' => true,
        'logradouro' => true,
        'numero' => true,
        'complemento' => true,
        'bairro' => true,
        'cep' => true,
        'anunciantes_id' => true,
        'categorias_id' => true,
        'anunciante' => true,
        'categoria' => true,
    ];
}
