<?php

    $GLOBALS['TL_DCA']['tl_article']['palettes']['default'] = str_replace 
    ( 
        'cssID',
		'cssID,bootstrap_container,bootstrap_row', 
        $GLOBALS['TL_DCA']['tl_article']['palettes']['default'] 
    ); 
     
    $GLOBALS['TL_DCA']['tl_article']['fields']['bootstrap_container'] = array 
    ( 
			'label'                   => &$GLOBALS['TL_LANG']['tl_article']['bootstrap_container'],
			'exclude'                 => true,
			'inputType'               => 'select',
            'options'             	  => array('container', 'container-fluid'), 
            'eval'                    => array('includeBlankOption'=>false, 'tl_class'=>'clr w50'),
			'sql'                     => "varchar(32) NOT NULL default 'container'"
    );

     
    $GLOBALS['TL_DCA']['tl_article']['fields']['bootstrap_row'] = array 
    ( 
			'label'                   => &$GLOBALS['TL_LANG']['tl_article']['bootstrap_row'],
			'exclude'                 => true,
			'inputType'               => 'text',
            'options'             	  => array('container', 'container-fluid'), 
            'eval'                    => array('tl_class'=>'clr w50'),
			'sql'                     => "varchar(32) NOT NULL default ''"
    ); 	