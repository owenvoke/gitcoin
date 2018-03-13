<?php

namespace pxgamer\Gitcoin;

/**
 * Class Bounty
 */
class Bounty
{
    /**
     * Public key id for this bounty
     * @var int
     */
    public $pk;

    /**
     * URL for this specific bounty Ex: api/v0.1/bounties/9
     * @var string
     */
    public $url;

    /**
     * Creation timestamp
     * @var \DateTime
     */
    public $created_on;

    /**
     * Last modified timestamp
     * @var \DateTime
     */
    public $modified_on;

    /**
     * Title of the bounty
     * @var string
     */
    public $title;

    /**
     * Creation timestamp for the transaction that holds this bounty
     * @var \DateTime
     */
    public $web3_created;

    /**
     * Amount of tokens rewarded for bounty
     * @var int
     */
    public $value_in_token;

    /**
     * Type of token. Ex: `ETH`, `GIT`
     * @var string
     */
    public $token_name;

    /**
     * Address where the tokens are located
     * @var string
     */
    public $token_address;

    /**
     * Type of bounty. Ex: `Bug`, `Feature`, `Security`
     * @var string
     */
    public $bounty_type;

    /**
     * Relative length of project Ex: `Hours`, `Days`, `Weeks`, `Months`
     * @var string
     */
    public $project_length;

    /**
     * Recommended experience level
     * @var string
     */
    public $experience_level;

    /**
     * URL on GitHub where you can find the bounty description
     * @var string
     */
    public $github_url;

    /**
     * Whether this bounty is the most current revision one or not
     * @var bool
     */
    public $current_bounty;

    /**
     * Date before which the bounty must be compelted
     * @var \DateTime
     */
    public $expires_date;

    /**
     * Raw contract data, see the example below for more information
     * @var array
     */
    public $raw_data;

    /**
     * Value of the bounty in Ethereum
     * @var int
     */
    public $value_in_eth;

    /**
     * Approximation of current value in USD
     * @var float
     */
    public $value_in_usdt;

    /**
     * Current date_time on the server
     * @var \DateTime
     */
    public $now;
}
