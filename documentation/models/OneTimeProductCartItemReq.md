# OneTimeProductCartItemReq



**Properties**

| Name | Type | Required | Description |
| :-------- | :----------| :----------| :----------|
    | productId | string | ✅ |  |
    | quantity | integer | ✅ |  |
    | amount | integer | ❌ | Amount the customer pays if pay_what_you_want is enabled. If disabled then amount will be ignored Represented in the lowest denomination of the currency (e.g., cents for USD). For example, to charge $1.00, pass `100`. |




<!-- This file was generated by liblab | https://liblab.com/ -->