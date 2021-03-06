<?php
/**
 * Registers a simple domain, handled by the TableStore handler with 
 *  { table: 'mytable' } as its parameters
 * This function maps all data on the "contact" table to the 
 *  objectiveweb/index.php/contact url where you can GET/POST/PUT/DELETE data
 */
register_domain('product', array(
    'handler' => 'TableStore',
    'public' => 'true',
    'table' => 'product'));

/**
 * Other options include hasMany and belongsTo associations, which will be documented on further examples
 */