<?php

class __Mustache_7b602086583aa8aa7a25d8589eea89b4 extends Mustache_Template
{
    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $buffer = '';
        $newContext = array();

        $buffer .= $indent . '<div class="alert alert-info">';
        $value = $this->resolveValue($context->find('message'), $context, $indent);
        $buffer .= $value;
        $buffer .= '</div>
';

        return $buffer;
    }
}
