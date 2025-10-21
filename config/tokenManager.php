<?php
class TokenManager
{
	private string $secretKey;
	private string $iv;

	public function __construct(string $secretKey)
	{
		$this->secretKey = hash('sha256', $secretKey);
		// Generate a fixed IV from key (for deterministic encryption of same UUID)
		$this->iv = substr(hash('sha256', "fixed_iv_{$secretKey}"), 0, 16);
	}

	/**
	 * Encrypt UUID into token
	 */
	public function encrypt(string $uuid): string
	{
		$encrypted = openssl_encrypt($uuid, 'AES-256-CBC', $this->secretKey, 0, $this->iv);
		return rtrim(strtr(base64_encode($encrypted), '+/', '-_'), '='); // URL-safe
	}

	/**
	 * Decrypt token back to UUID
	 */
	public function decrypt(string $token): ?string
	{
		$decoded = base64_decode(strtr($token, '-_', '+/'));
		$decrypted = openssl_decrypt($decoded, 'AES-256-CBC', $this->secretKey, 0, $this->iv);

		return $decrypted ?: null;
	}
}
