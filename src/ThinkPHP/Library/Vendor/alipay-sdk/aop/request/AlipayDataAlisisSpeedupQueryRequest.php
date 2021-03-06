<?php
/**
 * ALIPAY API: alipay.data.alisis.speedup.query request
 *
 * @author auto create
 * @since 1.0, 2015-09-10 13:59:52
 */
class AlipayDataAlisisSpeedupQueryRequest
{
	/** 
	 * http://service.odps.aliyun.com/api
	 **/
	private $endPoint;
	
	/** 
	 * 项目名称
	 **/
	private $project;
	
	/** 
	 * 表名
	 **/
	private $tableName;
	
	/** 
	 * 加速类型（ads/rds）
	 **/
	private $type;

	private $apiParas = array();
	private $terminalType;
	private $terminalInfo;
	private $prodCode;
	private $apiVersion="1.0";
	private $notifyUrl;

	
	public function setEndPoint($endPoint)
	{
		$this->endPoint = $endPoint;
		$this->apiParas["end_point"] = $endPoint;
	}

	public function getEndPoint()
	{
		return $this->endPoint;
	}

	public function setProject($project)
	{
		$this->project = $project;
		$this->apiParas["project"] = $project;
	}

	public function getProject()
	{
		return $this->project;
	}

	public function setTableName($tableName)
	{
		$this->tableName = $tableName;
		$this->apiParas["table_name"] = $tableName;
	}

	public function getTableName()
	{
		return $this->tableName;
	}

	public function setType($type)
	{
		$this->type = $type;
		$this->apiParas["type"] = $type;
	}

	public function getType()
	{
		return $this->type;
	}

	public function getApiMethodName()
	{
		return "alipay.data.alisis.speedup.query";
	}

	public function setNotifyUrl($notifyUrl)
	{
		$this->notifyUrl=$notifyUrl;
	}

	public function getNotifyUrl()
	{
		return $this->notifyUrl;
	}

	public function getApiParas()
	{
		return $this->apiParas;
	}

	public function getTerminalType()
	{
		return $this->terminalType;
	}

	public function setTerminalType($terminalType)
	{
		$this->terminalType = $terminalType;
	}

	public function getTerminalInfo()
	{
		return $this->terminalInfo;
	}

	public function setTerminalInfo($terminalInfo)
	{
		$this->terminalInfo = $terminalInfo;
	}

	public function getProdCode()
	{
		return $this->prodCode;
	}

	public function setProdCode($prodCode)
	{
		$this->prodCode = $prodCode;
	}

	public function setApiVersion($apiVersion)
	{
		$this->apiVersion=$apiVersion;
	}

	public function getApiVersion()
	{
		return $this->apiVersion;
	}

}
