<?php
/*!
 * Quanzhou iDeep Network Co., Ltd. 
 * https://www.ideep.net/
 * Version: Alpha test
 * Author Eddy eddy@ideep.net
 * Copyright 2018, Quanzhou iDeep
 */
	use WHMCS\Database\Capsule;
	$pdo = Capsule::connection()->getPdo();
	$pdo->beginTransaction();
	
	// 加载程序配置
	include('iDeepNAT.php');
	$tableName = mod_ideepnat;
	
    // 函数：用于把数据封装为 JSON 格式
    function echoJSON($withStatus,$andMessage){
        $data = array('status' => $withStatus, 'message' => $andMessage);
        $jsonstring = json_encode($data);
        header('Content-Type: application/json');
        echo $jsonstring;
    }
		
    // 配置API密匙
    $privateKey = $vars['option1'];

    //与数据库连接成功后，获取 URL 中的参数值，根据参数执行相应的程序。如：$_GET["key"] 用于获取 URL 中 "key" 的参数值。
        $key = $_GET["key"];
        if($key == $privateKey){
            $query = $_GET["query"];
            switch ($query){
                case "get":
                    try{
					$result = Capsule::table(string $tableName)->get()
					}catch (\Exception $e) {
						echo "数据库查询出错. {$e->getMessage()}";
					};
                    while ( $row = mysqli_fetch_array($result))
                    
                    $data = array('code' => 200, 'status' => true, 'date' => $row["Date"], 'id' => $row["id"]，'server' => $row["server"], 'ip' => $row["ip"], 'inport' => $row["inport"], 'outport' => $row["outport"]);
                    $jsonstring = json_encode($data);
                    header('Content-Type: application/json');
                    echo $jsonstring;
                    break;
                case "set":
                    $value = $_GET["status"];
                    $valueDouble = $value;
                    if($valueDouble){
                        try {
							$statement = $pdo->prepare(
							'DELETE FROM `mod_ideepnat` WHERE `log`'
							'INSERT INTO `mod_ideepnat`(`log`) VALUES (CURRENT_TIMESTAMP,:value);'
								);

								$statement->execute(
									[
										':value' => $valueDouble,
										]
									);

									$pdo->commit();
							} catch (\Exception $e) {
							echo "插入数据库错误. {$e->getMessage()}";
							$pdo->rollBack();
							}
                        $data = array('status' => true, 'message' => 'setting success');
                        $jsonstring = json_encode($data);
                        header('Content-Type: application/json');
                        echo $jsonstring;
                    }else{
                        echoJSON(false,"invalid value");
                    }
                    break;
                default:
                    echoJSON(false,"unsupported query");
            }
        }else{
            echoJSON(false,"invalid key");
        }
?>