<?php
use Carbon\Carbon;
class Temperatura extends Moloquent {

	protected $collection = 'minibigdata';
	protected $connection = 'mongodb';

	protected $fillable = array('temperatura');
}
