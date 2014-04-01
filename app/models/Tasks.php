<?php
class Tasks extends \Eloquent{
  protected $fillable = ['title'];
  protected $attributes = array(
    'done' => false
  );
}
