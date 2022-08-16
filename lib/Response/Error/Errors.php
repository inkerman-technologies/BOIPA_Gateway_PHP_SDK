<?php

namespace Payments;

class ResponseErrorErrors extends Response {
        
    public function __construct($errors = array()) {
        if (is_array($errors)) {
            foreach ($errors as $error) {
                if(is_null($error)) {
                    continue;
                }
                $this->_data[] = $error;
            }
        } else {
            $this->_data[$errors] = $errors;
        }
    }

}
