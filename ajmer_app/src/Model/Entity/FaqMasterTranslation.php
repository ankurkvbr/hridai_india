<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * FaqMasterTranslation Entity
 *
 * @property int $id
 * @property int $faq_master_id
 * @property string $faq_title
 * @property string $faq_description
 * @property string $lang
 * @property \Cake\I18n\Time $created_at
 * @property \Cake\I18n\Time $updated_at
 *
 * @property \App\Model\Entity\FaqMaster $faq_master
 */
class FaqMasterTranslation extends Entity
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
        '*' => true,
        'id' => false
    ];
}
