<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Anunciante Entity
 *
 * @property int $id
 * @property string $nome
 * @property string $sobrenome
 * @property string $cpf_cnpj
 * @property string $logradouro
 * @property int $numero
 * @property string|null $complemento
 * @property string $bairro
 * @property string $cep
 * @property string $telefone
 * @property string $email
 */
class Anunciante extends Entity
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
        'sobrenome' => true,
        'cpf_cnpj' => true,
        'logradouro' => true,
        'numero' => true,
        'complemento' => true,
        'bairro' => true,
        'cep' => true,
        'telefone' => true,
        'email' => true,
    ];
}
