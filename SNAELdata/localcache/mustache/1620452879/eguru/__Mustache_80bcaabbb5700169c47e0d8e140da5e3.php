<?php

class __Mustache_80bcaabbb5700169c47e0d8e140da5e3 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';
        $newContext = array();

        $buffer .= $indent . '
';
        $buffer .= $indent . '<div id="stash-area-';
        $value = $this->resolveValue($context->find('id'), $context, $indent);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '" data-id="';
        $value = $this->resolveValue($context->find('id'), $context, $indent);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '">
';
        // 'canacquireitems' section
        $value = $context->find('canacquireitems');
        $buffer .= $this->section7b4da2c9629f9d8d92d5a2a7343807f2($context, $indent, $value);
        $buffer .= $indent . '
';
        // 'canmanage' section
        $value = $context->find('canmanage');
        $buffer .= $this->section84c8cd7a2e5b8c6342bab68680e8941f($context, $indent, $value);
        $buffer .= $indent . '</div>
';
        $buffer .= $indent . '
';
        // 'js' section
        $value = $context->find('js');
        $buffer .= $this->section566525be860283d94d60f537f36815d8($context, $indent, $value);

        return $buffer;
    }

    private function section4eb2efc00deda42e1ee04078c5c9852b(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
            {{>block_stash/user_item}}
        ';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                if ($partial = $this->mustache->loadPartial('block_stash/user_item')) {
                    $buffer .= $partial->renderInternal($context, $indent . '            ');
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section4505749cc175616ff0b4b5863e2bdb7b(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = 'yourinventoryisempty, block_stash';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'yourinventoryisempty, block_stash';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section7b4da2c9629f9d8d92d5a2a7343807f2(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
    <div class="item-list">
        {{#items}}
            {{>block_stash/user_item}}
        {{/items}}
        {{^items}}
            <div class="empty-content alert alert-info">{{#str}}yourinventoryisempty, block_stash{{/str}}</div>
        {{/items}}
    </div>
';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '    <div class="item-list">
';
                // 'items' section
                $value = $context->find('items');
                $buffer .= $this->section4eb2efc00deda42e1ee04078c5c9852b($context, $indent, $value);
                // 'items' inverted section
                $value = $context->find('items');
                if (empty($value)) {
                    
                    $buffer .= $indent . '            <div class="empty-content alert alert-info">';
                    // 'str' section
                    $value = $context->find('str');
                    $buffer .= $this->section4505749cc175616ff0b4b5863e2bdb7b($context, $indent, $value);
                    $buffer .= '</div>
';
                }
                $buffer .= $indent . '    </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section0b3fa3291c1baec937d788cfc9a14872(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = 'setup, block_stash';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'setup, block_stash';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section132da7e03ba027db12d720f1b81991ca(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = 'report, block_stash';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'report, block_stash';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section84c8cd7a2e5b8c6342bab68680e8941f(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
    <div>
        <small>
            <a href="{{inventoryurl}}">{{#str}}setup, block_stash{{/str}}</a> -
            <a href="{{reporturl}}">{{#str}}report, block_stash{{/str}}</a>
        </small>
    </div>
';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '    <div>
';
                $buffer .= $indent . '        <small>
';
                $buffer .= $indent . '            <a href="';
                $value = $this->resolveValue($context->find('inventoryurl'), $context, $indent);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '">';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section0b3fa3291c1baec937d788cfc9a14872($context, $indent, $value);
                $buffer .= '</a> -
';
                $buffer .= $indent . '            <a href="';
                $value = $this->resolveValue($context->find('reporturl'), $context, $indent);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '">';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section132da7e03ba027db12d720f1b81991ca($context, $indent, $value);
                $buffer .= '</a>
';
                $buffer .= $indent . '        </small>
';
                $buffer .= $indent . '    </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section566525be860283d94d60f537f36815d8(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
require([
    \'jquery\',
    \'block_stash/stash-area\'
], function($, StashArea) {
    var Area = new StashArea(\'#stash-area-{{id}}\');
});
';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . 'require([
';
                $buffer .= $indent . '    \'jquery\',
';
                $buffer .= $indent . '    \'block_stash/stash-area\'
';
                $buffer .= $indent . '], function($, StashArea) {
';
                $buffer .= $indent . '    var Area = new StashArea(\'#stash-area-';
                $value = $this->resolveValue($context->find('id'), $context, $indent);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '\');
';
                $buffer .= $indent . '});
';
                $context->pop();
            }
        }
    
        return $buffer;
    }
}
