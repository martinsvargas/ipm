<?php

class Entity_DeclaracaoGiaGia extends Entity_DeclaracaoGiaGiaCentral {
	protected static $instance = null;

	/**
	 * Implementação do método singleton para obter a instancia da classe
	 * 
	 * @return Entity
	 */
	public static function getInstance() {
		null == self::$instance &&
			self::$instance = new self();
		return self::$instance;
	}
}