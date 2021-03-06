<?php

class ScRegion extends CActiveRecord {
    
     public function __construct() {
        CActiveRecord::$db = Yii::app()->db;       
    }


    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

    public function tableName() {
        return '{{sc_region}}';
    }

    public function rules() {
        return array(
        );
    }

	public function deleteByAdId($adId){	
		return $this->deleteAll('ad_id=:ad_id', array(':ad_id'=>$adId));
	}

}