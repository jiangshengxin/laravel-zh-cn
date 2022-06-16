<?php

$arr = [
    'vendor/symfony/console/Application.php'                                              => [
        "'Display help for the given command. When no command is given display help for the <info>'.\$this->defaultCommand.'</info> command'" => "'显示给定命令的帮助信息。当没有给出命令时，显示 <info>' . \$this->defaultCommand . '</info> 命令的帮助'",
        "'Do not output any message'"                                                                                                         => "'不输出任何消息'",
        "'Increase the verbosity of messages: 1 for normal output, 2 for more verbose output and 3 for debug'"                                => "'增加消息的详细程度：1 表示正常输出，2 表示更详细的输出，3 表示调试'",
        "'Display this application version'"                                                                                                  => "'显示此应用程序版本'",
        "'Do not ask any interactive question'"                                                                                               => "'不要问任何互动问题'",
    ],
    'vendor/laravel/framework/src/Illuminate/Console/Application.php'                     => [
        "'The environment the command should run under'" => "'命令应该运行的环境'",
    ],
    'vendor/laravel/framework/src/Illuminate/Foundation/Console/ClearCompiledCommand.php' => [
        "'Remove the compiled class file'" => "'删除已编译的类文件'",
    ],
];


foreach ($arr as $key => $val) {
    if (file_exists(__DIR__ . '/' . $key)) {
        $content = file_get_contents(__DIR__ . '/' . $key);
        foreach ($val as $k => $v) {
            $content = str_replace($k, $v, $content);
        }
        file_put_contents(__DIR__ . '/' . $key, $content);
    }
}
