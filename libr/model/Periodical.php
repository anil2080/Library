<?php

require_once 'model/dbModel.php';


class PeriodicalModel extends dbModel
{
    private $id;
    private $name;
    private $volume;
    private $price;
    private $discount;
    private $net_price;
    private $bill_number;
    private $date_of_purchase;
    private $vendor_name;
    private $language;
    private $number_of_copy;
    private $visible;
	/**
     * @return the $id
     */
    public function getId ()
    {
        return $this->id;
    }

	/**
     * @return the $name
     */
    public function getName ()
    {
        return $this->name;
    }

	/**
     * @return the $volume
     */
    public function getVolume ()
    {
        return $this->volume;
    }

	/**
     * @return the $price
     */
    public function getPrice ()
    {
        return $this->price;
    }

	/**
     * @return the $discount
     */
    public function getDiscount ()
    {
        return $this->discount;
    }

	/**
     * @return the $net_price
     */
    public function getNet_price ()
    {
        return $this->net_price;
    }

	/**
     * @return the $bill_number
     */
    public function getBill_number ()
    {
        return $this->bill_number;
    }

	/**
     * @return the $date_of_purchase
     */
    public function getDate_of_purchase ()
    {
        return $this->date_of_purchase;
    }

	/**
     * @return the $vendor_name
     */
    public function getVendor_name ()
    {
        return $this->vendor_name;
    }

	/**
     * @return the $language
     */
    public function getLanguage ()
    {
        return $this->language;
    }

	/**
     * @return the $number_of_copy
     */
    public function getNumber_of_copy ()
    {
        return $this->number_of_copy;
    }

	/**
     * @return the $visible
     */
    public function getVisible ()
    {
        return $this->visible;
    }

	/**
     * @param field_type $id
     */
    public function setId ($id)
    {
        $this->id = $id;
    }

	/**
     * @param field_type $name
     */
    public function setName ($name)
    {
        $this->name = $name;
    }

	/**
     * @param field_type $volume
     */
    public function setVolume ($volume)
    {
        $this->volume = $volume;
    }

	/**
     * @param field_type $price
     */
    public function setPrice ($price)
    {
        $this->price = $price;
    }

	/**
     * @param field_type $discount
     */
    public function setDiscount ($discount)
    {
        $this->discount = $discount;
    }

	/**
     * @param field_type $net_price
     */
    public function setNet_price ($net_price)
    {
        $this->net_price = $net_price;
    }

	/**
     * @param field_type $bill_number
     */
    public function setBill_number ($bill_number)
    {
        $this->bill_number = $bill_number;
    }

	/**
     * @param field_type $date_of_purchase
     */
    public function setDate_of_purchase ($date_of_purchase)
    {
        $this->date_of_purchase = $date_of_purchase;
    }

	/**
     * @param field_type $vendor_name
     */
    public function setVendor_name ($vendor_name)
    {
        $this->vendor_name = $vendor_name;
    }

	/**
     * @param field_type $language
     */
    public function setLanguage ($language)
    {
        $this->language = $language;
    }

	/**
     * @param field_type $number_of_copy
     */
    public function setNumber_of_copy ($number_of_copy)
    {
        $this->number_of_copy = $number_of_copy;
    }

	/**
     * @param field_type $visible
     */
    public function setVisible ($visible)
    {
        $this->visible = $visible;
    }

    public function DeletePeriodical($values) {
        $this->setId($values['id']);
        $id=$this->getId();
        echo $id;
        //first we need that id which is entered by user that id is valid or not...
        $whereid=array('id'=>$id);//key value pair for updation
        $this->db->Fields(array('id'))->From("periodical")->where($whereid)->select();
        //print_r($boolval) or die("if the value of boolvalue is 0");
        
        $memberResultArray=$this->db->resultArray();
        //print_r($memberResultArray);die;
        $recordsNumber=count($memberResultArray);
        if($recordsNumber>0)
        {
            //i.e. The id entered by user to delete exists....
            $this->db->Fields(array('visible'))->From("periodical")->where($whereid)->select();
            $memberIdExistArray=$this->db->resultArray();
            $visiblevalue=$memberIdExistArray[0]['visible'];
            if($visiblevalue==TRUE)
            { echo "halo";
            $this->db->Fields(array('visible'=>'FALSE'))->From("periodical")->where($whereid)->update();
            }
        }
        else 
        
            echo "not valid value";
        
        }    

}
    
