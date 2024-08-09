<?php

declare(strict_types=1);
namespace GiocoPlus\JILI\Contract;

interface JiliServiceInterface
{
    /**
     * 遊戲啟動
     *
     * @param string $op_code
     * @param string $account
     * @param string $game_code
     * @param string $language
     * @param string $back_url
     * @return mixed
     */
    function gameLaunch(string $op_code, string $account, string $game_code, string $language, string $back_url = null);

    /**
     * 遊戲詳情
     * @param string $op_code
     * @param string $account
     * @param string $bet_id
     * @return mixed
     */
    function gameDetail(string $op_code, string $account, string $bet_id, string $language);

    /**
     * 營商帳號轉換為遊戲商帳號
     * @param string $opCode
     * @param array $vendor
     * @param string $memberCode
     * @return mixed
     */
    function accountToVendor(string $opCode, array $vendor, string $memberCode);

    /**
     * 遊戲商帳號轉換為營商帳號
     * @param string $opCode
     * @param array $vendor
     * @param string $vendorAccount
     * @return mixed
     */
    function accountToOperator(string $opCode, array $vendor, string $vendorAccount);

}