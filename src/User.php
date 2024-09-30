<?php
namespace Src;

class User {
	public function __construct(
		public int $id,
		public string $name,
	) {}

	public function getId(): int {
		return $this->id;
	}

	public function setName(string $name): void {
		$this->name = $name;
	}

	public function delete(): bool
	{
		if ( $this->id === 1 ) {
			$this->id   = 0;
			$this->name = 'DELETED';

			return true;
		}

		return false;
	}
}