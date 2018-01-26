<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitc5489b2f4d5380e130f419df471542a6
{
    public static $prefixLengthsPsr4 = array (
        'K' => 
        array (
            'Khipu\\' => 6,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Khipu\\' => 
        array (
            0 => __DIR__ . '/..' . '/khipu/khipu-api-client/lib',
        ),
    );

    public static $classMap = array (
        'AC_Account' => __DIR__ . '/../..' . '/includes/Account.class.php',
        'AC_Auth' => __DIR__ . '/../..' . '/includes/Auth.class.php',
        'AC_Automation' => __DIR__ . '/../..' . '/includes/Automation.class.php',
        'AC_Campaign' => __DIR__ . '/../..' . '/includes/Campaign.class.php',
        'AC_Connector' => __DIR__ . '/../..' . '/includes/Connector.class.php',
        'AC_Contact' => __DIR__ . '/../..' . '/includes/Contact.class.php',
        'AC_Deal' => __DIR__ . '/../..' . '/includes/Deal.class.php',
        'AC_Design' => __DIR__ . '/../..' . '/includes/Design.class.php',
        'AC_Form' => __DIR__ . '/../..' . '/includes/Form.class.php',
        'AC_Group' => __DIR__ . '/../..' . '/includes/Group.class.php',
        'AC_List_' => __DIR__ . '/../..' . '/includes/List.class.php',
        'AC_Message' => __DIR__ . '/../..' . '/includes/Message.class.php',
        'AC_Organization' => __DIR__ . '/../..' . '/includes/Organization.class.php',
        'AC_Segment' => __DIR__ . '/../..' . '/includes/Segment.class.php',
        'AC_Settings' => __DIR__ . '/../..' . '/includes/Settings.class.php',
        'AC_Subscriber' => __DIR__ . '/../..' . '/includes/Subscriber.class.php',
        'AC_Tag' => __DIR__ . '/../..' . '/includes/Tag.class.php',
        'AC_Tracking' => __DIR__ . '/../..' . '/includes/Tracking.class.php',
        'AC_User' => __DIR__ . '/../..' . '/includes/User.class.php',
        'AC_Webhook' => __DIR__ . '/../..' . '/includes/Webhook.class.php',
        'ActiveCampaign' => __DIR__ . '/../..' . '/includes/ActiveCampaign.class.php',
        'RequestException' => __DIR__ . '/../..' . '/includes/exceptions/RequestException.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitc5489b2f4d5380e130f419df471542a6::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitc5489b2f4d5380e130f419df471542a6::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitc5489b2f4d5380e130f419df471542a6::$classMap;

        }, null, ClassLoader::class);
    }
}
