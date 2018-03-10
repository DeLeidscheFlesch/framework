<?php

/**
 * @copyright Frederic G. Østby
 * @license   http://www.makoframework.com/license
 */

namespace mako\validator\rules;

/**
 * Alphanumeric unicode rule.
 *
 * @author Frederic G. Østby
 */
class AlphanumericUnicode extends Rule implements RuleInterface
{
	/**
	 * {@inheritdoc}
	 */
	public function validate($value, array $input): bool
	{
		return preg_match('/^[\pL0-9]+$/u', $value) === 1;
	}

	/**
	 * {@inheritdoc}
	 */
	public function getErrorMessage(string $field): string
	{
		return sprintf('The %1$s field must contain only letters and numbers.', $field);
	}
}
