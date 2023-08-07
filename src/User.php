<?php

namespace InterestAccount;

use Exception;

/**
 *  User class
 */
class User implements UserInterface
{
    /**
     * @var UserId
     */
    private  UserId $id;

    /**
     * Income per month in decimal
     */
    private ?int $incomePerMonth;

    /**
     * @throws Exception
     */
    public function __construct(UserId $id, ?int $incomePerMonth)
    {
        if (!is_null($incomePerMonth) && $incomePerMonth < 0) {
            throw new Exception(
                "A user's income must be positive."
            );
        }

        $this->id = $id;
        $this->incomePerMonth = $incomePerMonth;
    }

    /**
     * @return bool
     */
    public function hasIncomeInformation(): bool
    {
        return is_int($this->incomePerMonth);
    }

    /**
     * @return int
     * @throws Exception
     */
    public function incomePerMonth(): int
    {
        if (!$this->hasIncomeInformation()) {
            throw new Exception(
                "{$this->id()} has not provided income information."
            );
        }

        return (int)$this->incomePerMonth;
    }

    /**
     * @return UserId
     */
    public function id(): UserId
    {
        return $this->id;
    }
}