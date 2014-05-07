<?php
App::uses('AppModel', 'Model');
/**
 * War Model
 *
 * @property AwayClan $AwayClan
 * @property HomeClan $HomeClan
 * @property Attack $Attack
 */
class War extends AppModel {

	//adding a virtual field to figure star level
public function __construct($id=false, $table=null, $ds=null){
       parent::__construct($id, $table, $ds);
       $this->virtualFields = array(
         'date'=>'DATE_FORMAT(War.startTime,"%d/%m")'
         );
   }

//function to do calculate the stage

//do virtual fields HAVE to be mysql statments?  do I have the wrong terminology?
	
/*function getStage($prepTime, $warTime, $endTime){
	$nowTime = new DateTime('now');        
	if( $endTime < $nowTime) {
		return "Ended";
	};
	elseif( $warTime < $nowTime) {
		return "War";
	};
	elseif( $preptime < $nowtime) {
		return "Preperation";
	};
    else { return "error";}
}*/

// adding virtual fields to help with the view
/*var $virtualFields = array(
	'stage' => 
);*/

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'startTime' => array(
			'datetime' => array(
				'rule' => array('datetime'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'prepareTime' => array(
			'datetime' => array(
				'rule' => array('datetime'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'warTime' => array(
			'datetime' => array(
				'rule' => array('datetime'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'endTime' => array(
			'datetime' => array(
				'rule' => array('datetime'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'awayClan_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'homeClan_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'created' => array(
			'datetime' => array(
				'rule' => array('datetime'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'modified' => array(
			'datetime' => array(
				'rule' => array('datetime'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'AwayClan' => array(
			'className' => 'Clan',
			'foreignKey' => 'awayClan_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'HomeClan' => array(
			'className' => 'Clan',
			'foreignKey' => 'homeClan_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'Attack' => array(
			'className' => 'Attack',
			'foreignKey' => 'war_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		)
	);

}
