<?php

Yii::app()->moduleManager->register(array(
    'id' => 'map',
    'class' => 'application.modules.map.CkMapModule',
    'import' => array(
        'application.modules.map.*',
        'application.modules.map.models.*',
        'application.modules.map.notifications.*',
    ),
    'events' => array(
//		array('class' => 'AdminMenuWidget', 'event' => 'onInit', 'callback' => array( 'CkMapModuleEvents', 'onAdminMenuInit') ),
		array('class' => 'SpaceMenuWidget', 'event' => 'onInit', 'callback' => array('CkMapModuleEvents', 'onSpaceMenuInit')),
        array('class' => 'ProfileMenuWidget', 'event' => 'onInit', 'callback' => array('CkMapModuleEvents', 'onProfileMenuInit')),
        array('class' => 'SpaceSidebarWidget', 'event' => 'onInit', 'callback' => array('CkMapModuleEvents', 'onSpaceSidebarInit')),
        array('class' => 'ProfileSidebarWidget', 'event' => 'onInit', 'callback' => array('CkMapModuleEvents', 'onProfileSidebarInit')),
        array('class' => 'DashboardSidebarWidget', 'event' => 'onInit', 'callback' => array('CkMapModuleEvents', 'onDashboardSidebarInit')),
        array('class' => 'TopMenuWidget', 'event' => 'onInit', 'callback' => array('CkMapModuleEvents', 'onTopMenuInit')),
		),
));

?>