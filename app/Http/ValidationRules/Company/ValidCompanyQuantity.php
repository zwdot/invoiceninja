<?php
/**
 * Invoice Ninja (https://invoiceninja.com)
 *
 * @link https://github.com/invoiceninja/invoiceninja source repository
 *
 * @copyright Copyright (c) 2020. Invoice Ninja LLC (https://invoiceninja.com)
 *
 * @license https://opensource.org/licenses/AAL
 */

namespace App\Http\ValidationRules\Company;

use Illuminate\Contracts\Validation\Rule;

/**
 * Class ValidCompanyQuantity
 * @package App\Http\ValidationRules\Company
 */
class ValidCompanyQuantity implements Rule
{

    /**
     * @param string $attribute
     * @param mixed $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        
        return auth()->user()->company()->account->companies->count() <= 10;

    }

    /**
     * @return string
     */
    public function message()
    {
        return "Limit of 10 companies per account.";
    }


}
