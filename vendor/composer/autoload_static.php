<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitc986576fb13194ba58ac60e48af57b97
{
    public static $classMap = array (
        'Atualizar' => __DIR__ . '/../..' . '/bd/Atualizar.php',
        'Deletar' => __DIR__ . '/../..' . '/bd/Deletar.php',
        'Inserir' => __DIR__ . '/../..' . '/bd/Inserir.php',
        'Listar' => __DIR__ . '/../..' . '/bd/Listar.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInitc986576fb13194ba58ac60e48af57b97::$classMap;

        }, null, ClassLoader::class);
    }
}
