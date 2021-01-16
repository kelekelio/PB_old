<?php
/**
 * Generated by build/gen_test
 */
require_once('src/lightncandy.php');

class LightnCandyTest extends PHPUnit_Framework_TestCase
{
    /**
     * @covers LightnCandy::stripExtendedComments
     */
    public function testOn_stripExtendedComments() {
        $method = new ReflectionMethod('LightnCandy', 'stripExtendedComments');
        $method->setAccessible(true);
        $this->assertEquals('abc', $method->invokeArgs(null,array(
            'abc'
)        ));
        $this->assertEquals('abc{{!}}cde', $method->invokeArgs(null,array(
            'abc{{!}}cde'
)        ));
        $this->assertEquals('abc{{! }}cde', $method->invokeArgs(null,array(
            'abc{{!----}}cde'
)        ));
    }
    /**
     * @covers LightnCandy::escapeTemplate
     */
    public function testOn_escapeTemplate() {
        $method = new ReflectionMethod('LightnCandy', 'escapeTemplate');
        $method->setAccessible(true);
        $this->assertEquals('abc', $method->invokeArgs(null,array(
            'abc'
)        ));
        $this->assertEquals('a\\\\bc', $method->invokeArgs(null,array(
            'a\bc'
)        ));
        $this->assertEquals('a\\\'bc', $method->invokeArgs(null,array(
            'a\'bc'
)        ));
    }
    /**
     * @covers LightnCandy::buildHelperTable
     */
    public function testOn_buildHelperTable() {
        $method = new ReflectionMethod('LightnCandy', 'buildHelperTable');
        $method->setAccessible(true);
        $this->assertEquals(array(), $method->invokeArgs(null,array(
            array(), array()
)        ));
        $this->assertEquals(array('flags' => array('exhlp' => 1)), $method->invokeArgs(null,array(
            array('flags' => array('exhlp' => 1)), array('helpers' => array('abc'))
)        ));
        $this->assertEquals(array('error' => array('Can not find custom helper function defination abc() !'), 'flags' => array('exhlp' => 0)), $method->invokeArgs(null,array(
            array('error' => array(), 'flags' => array('exhlp' => 0)), array('helpers' => array('abc'))
)        ));
        $this->assertEquals(array('flags' => array('exhlp' => 1), 'helpers' => array('LCRun3::raw' => 'LCRun3::raw')), $method->invokeArgs(null,array(
            array('flags' => array('exhlp' => 1), 'helpers' => array()), array('helpers' => array('LCRun3::raw'))
)        ));
        $this->assertEquals(array('flags' => array('exhlp' => 1), 'helpers' => array('test' => 'LCRun3::raw')), $method->invokeArgs(null,array(
            array('flags' => array('exhlp' => 1), 'helpers' => array()), array('helpers' => array('test' => 'LCRun3::raw'))
)        ));
    }
    /**
     * @covers LightnCandy::prePartial
     */
    public function testOn_prePartial() {
        $method = new ReflectionMethod('LightnCandy', 'prePartial');
        $method->setAccessible(true);
        $this->assertEquals('hey', $method->invokeArgs(null,array(
            'hey', 'haha', Array('prepartial' => false)
)        ));
        $this->assertEquals('haha-hoho', $method->invokeArgs(null,array(
            'hoho', 'haha', Array('prepartial' => function ($tmpl, $name) {return "$name-$tmpl";})
)        ));
    }
    /**
     * @covers LightnCandy::buildCXFileext
     */
    public function testOn_buildCXFileext() {
        $method = new ReflectionMethod('LightnCandy', 'buildCXFileext');
        $method->setAccessible(true);
        $this->assertEquals(array('.tmpl'), $method->invokeArgs(null,array(
            array()
)        ));
        $this->assertEquals(array('test'), $method->invokeArgs(null,array(
            array('fileext' => 'test')
)        ));
        $this->assertEquals(array('test1'), $method->invokeArgs(null,array(
            array('fileext' => array('test1'))
)        ));
        $this->assertEquals(array('test2', 'test3'), $method->invokeArgs(null,array(
            array('fileext' => array('test2', 'test3'))
)        ));
    }
    /**
     * @covers LightnCandy::buildCXBasedir
     */
    public function testOn_buildCXBasedir() {
        $method = new ReflectionMethod('LightnCandy', 'buildCXBasedir');
        $method->setAccessible(true);
        $this->assertEquals(array(), $method->invokeArgs(null,array(
            array()
)        ));
        $this->assertEquals(array(), $method->invokeArgs(null,array(
            array('basedir' => array())
)        ));
        $this->assertEquals(array('src'), $method->invokeArgs(null,array(
            array('basedir' => array('src'))
)        ));
        $this->assertEquals(array('src'), $method->invokeArgs(null,array(
            array('basedir' => array('src', 'dir_not_found'))
)        ));
        $this->assertEquals(array('src', 'tests'), $method->invokeArgs(null,array(
            array('basedir' => array('src', 'tests'))
)        ));
    }
    /**
     * @covers LightnCandy::getPHPCode
     */
    public function testOn_getPHPCode() {
        $method = new ReflectionMethod('LightnCandy', 'getPHPCode');
        $method->setAccessible(true);
        $this->assertEquals('function($a) {return;}', $method->invokeArgs(null,array(
            function ($a) {return;}
)        ));
        $this->assertEquals('function($a) {return;}', $method->invokeArgs(null,array(
               function ($a) {return;}
)        ));
    }
    /**
     * @covers LightnCandy::handleError
     */
    public function testOn_handleError() {
        $method = new ReflectionMethod('LightnCandy', 'handleError');
        $method->setAccessible(true);
        $this->assertEquals(true, $method->invokeArgs(null,array(
            array('level' => 1, 'stack' => array('X'), 'flags' => array('errorlog' => 0, 'exception' => 0), 'error' => array(), 'rawblock' => 0)
)        ));
        $this->assertEquals(false, $method->invokeArgs(null,array(
            array('level' => 0, 'error' => array())
)        ));
        $this->assertEquals(true, $method->invokeArgs(null,array(
            array('level' => 0, 'error' => array('some error'), 'flags' => array('errorlog' => 0, 'exception' => 0))
)        ));
    }
    /**
     * @covers LightnCandy::getBoolStr
     */
    public function testOn_getBoolStr() {
        $method = new ReflectionMethod('LightnCandy', 'getBoolStr');
        $method->setAccessible(true);
        $this->assertEquals('true', $method->invokeArgs(null,array(
            1
)        ));
        $this->assertEquals('true', $method->invokeArgs(null,array(
            999
)        ));
        $this->assertEquals('false', $method->invokeArgs(null,array(
            0
)        ));
        $this->assertEquals('false', $method->invokeArgs(null,array(
            -1
)        ));
    }
    /**
     * @covers LightnCandy::getFuncName
     */
    public function testOn_getFuncName() {
        $method = new ReflectionMethod('LightnCandy', 'getFuncName');
        $method->setAccessible(true);
        $this->assertEquals('LCRun3::test(', $method->invokeArgs(null,array(
            array('flags' => array('standalone' => 0, 'debug' => 0), 'lcrun' => 'LCRun3'), 'test', ''
)        ));
        $this->assertEquals('LCRun3::test2(', $method->invokeArgs(null,array(
            array('flags' => array('standalone' => 0, 'debug' => 0), 'lcrun' => 'LCRun3'), 'test2', ''
)        ));
        $this->assertEquals("\$cx['funcs']['test3'](", $method->invokeArgs(null,array(
            array('flags' => array('standalone' => 1, 'debug' => 0), 'lcrun' => 'LCRun3'), 'test3', ''
)        ));
        $this->assertEquals('LCRun3::debug(\'abc\', \'test\', ', $method->invokeArgs(null,array(
            array('flags' => array('standalone' => 0, 'debug' => 1), 'lcrun' => 'LCRun3'), 'test', 'abc'
)        ));
    }
    /**
     * @covers LightnCandy::getArrayStr
     */
    public function testOn_getArrayStr() {
        $method = new ReflectionMethod('LightnCandy', 'getArrayStr');
        $method->setAccessible(true);
        $this->assertEquals('', $method->invokeArgs(null,array(
            array()
)        ));
        $this->assertEquals('[a]', $method->invokeArgs(null,array(
            array('a')
)        ));
        $this->assertEquals('[a][b][c]', $method->invokeArgs(null,array(
            array('a', 'b', 'c')
)        ));
    }
    /**
     * @covers LightnCandy::getArrayCode
     */
    public function testOn_getArrayCode() {
        $method = new ReflectionMethod('LightnCandy', 'getArrayCode');
        $method->setAccessible(true);
        $this->assertEquals('', $method->invokeArgs(null,array(
            array()
)        ));
        $this->assertEquals("['a']", $method->invokeArgs(null,array(
            array('a')
)        ));
        $this->assertEquals("['a']['b']['c']", $method->invokeArgs(null,array(
            array('a', 'b', 'c')
)        ));
    }
    /**
     * @covers LightnCandy::getVariableNames
     */
    public function testOn_getVariableNames() {
        $method = new ReflectionMethod('LightnCandy', 'getVariableNames');
        $method->setAccessible(true);
        $this->assertEquals(array('array(array($in),array())', array('this')), $method->invokeArgs(null,array(
            array(null), array('flags'=>array('spvar'=>true))
)        ));
        $this->assertEquals(array('array(array($in,$in),array())', array('this', 'this')), $method->invokeArgs(null,array(
            array(null, null), array('flags'=>array('spvar'=>true))
)        ));
        $this->assertEquals(array('array(array(),array(\'a\'=>$in))', array('this')), $method->invokeArgs(null,array(
            array('a' => null), array('flags'=>array('spvar'=>true))
)        ));
    }
    /**
     * @covers LightnCandy::getVariableName
     */
    public function testOn_getVariableName() {
        $method = new ReflectionMethod('LightnCandy', 'getVariableName');
        $method->setAccessible(true);
        $this->assertEquals(array('$in', 'this'), $method->invokeArgs(null,array(
            array(null), array('flags'=>array('spvar'=>true,'debug'=>0))
)        ));
        $this->assertEquals(array('((isset($in[\'true\']) && is_array($in)) ? $in[\'true\'] : null)', '[true]'), $method->invokeArgs(null,array(
            array('true'), array('flags'=>array('spvar'=>true,'debug'=>0,'prop'=>0,'method'=>0,'mustlok'=>0))
)        ));
        $this->assertEquals(array('((isset($in[\'false\']) && is_array($in)) ? $in[\'false\'] : null)', '[false]'), $method->invokeArgs(null,array(
            array('false'), array('flags'=>array('spvar'=>true,'debug'=>0,'prop'=>0,'method'=>0,'mustlok'=>0))
)        ));
        $this->assertEquals(array('true', 'true'), $method->invokeArgs(null,array(
            array(0, 'true'), array('flags'=>array('spvar'=>true,'debug'=>0))
)        ));
        $this->assertEquals(array('false', 'false'), $method->invokeArgs(null,array(
            array(0, 'false'), array('flags'=>array('spvar'=>true,'debug'=>0))
)        ));
        $this->assertEquals(array('((isset($in[\'2\']) && is_array($in)) ? $in[\'2\'] : null)', '[2]'), $method->invokeArgs(null,array(
            array('2'), array('flags'=>array('spvar'=>true,'debug'=>0,'prop'=>0,'method'=>0,'mustlok'=>0))
)        ));
        $this->assertEquals(array('2', '2'), $method->invokeArgs(null,array(
            array(0, '2'), array('flags'=>array('spvar'=>true,'debug'=>0,'prop'=>0,'method'=>0))
)        ));
        $this->assertEquals(array('((isset($in[\'@index\']) && is_array($in)) ? $in[\'@index\'] : null)', '[@index]'), $method->invokeArgs(null,array(
            array('@index'), array('flags'=>array('spvar'=>false,'debug'=>0,'prop'=>0,'method'=>0,'mustlok'=>0))
)        ));
        $this->assertEquals(array("((isset(\$cx['sp_vars']['index']) && is_array(\$cx['sp_vars'])) ? \$cx['sp_vars']['index'] : null)", '@[index]'), $method->invokeArgs(null,array(
            array('@index'), array('flags'=>array('spvar'=>true,'debug'=>0,'prop'=>0,'method'=>0,'mustlok'=>0))
)        ));
        $this->assertEquals(array("((isset(\$cx['sp_vars']['key']) && is_array(\$cx['sp_vars'])) ? \$cx['sp_vars']['key'] : null)", '@[key]'), $method->invokeArgs(null,array(
            array('@key'), array('flags'=>array('spvar'=>true,'debug'=>0,'prop'=>0,'method'=>0,'mustlok'=>0))
)        ));
        $this->assertEquals(array("((isset(\$cx['sp_vars']['first']) && is_array(\$cx['sp_vars'])) ? \$cx['sp_vars']['first'] : null)", '@[first]'), $method->invokeArgs(null,array(
            array('@first'), array('flags'=>array('spvar'=>true,'debug'=>0,'prop'=>0,'method'=>0,'mustlok'=>0))
)        ));
        $this->assertEquals(array("((isset(\$cx['sp_vars']['last']) && is_array(\$cx['sp_vars'])) ? \$cx['sp_vars']['last'] : null)", '@[last]'), $method->invokeArgs(null,array(
            array('@last'), array('flags'=>array('spvar'=>true,'debug'=>0,'prop'=>0,'method'=>0,'mustlok'=>0))
)        ));
        $this->assertEquals(array('((isset($in[\'"a"\']) && is_array($in)) ? $in[\'"a"\'] : null)', '["a"]'), $method->invokeArgs(null,array(
            array('"a"'), array('flags'=>array('spvar'=>true,'debug'=>0,'prop'=>0,'method'=>0,'mustlok'=>0))
)        ));
        $this->assertEquals(array('"a"', '"a"'), $method->invokeArgs(null,array(
            array(0, '"a"'), array('flags'=>array('spvar'=>true,'debug'=>0))
)        ));
        $this->assertEquals(array('((isset($in[\'a\']) && is_array($in)) ? $in[\'a\'] : null)', '[a]'), $method->invokeArgs(null,array(
            array('a'), array('flags'=>array('spvar'=>true,'debug'=>0,'prop'=>0,'method'=>0,'mustlok'=>0))
)        ));
        $this->assertEquals(array('((isset($cx[\'scopes\'][count($cx[\'scopes\'])-1][\'a\']) && is_array($cx[\'scopes\'][count($cx[\'scopes\'])-1])) ? $cx[\'scopes\'][count($cx[\'scopes\'])-1][\'a\'] : null)', '../[a]'), $method->invokeArgs(null,array(
            array(1,'a'), array('flags'=>array('spvar'=>true,'debug'=>0,'prop'=>0,'method'=>0,'mustlok'=>0))
)        ));
        $this->assertEquals(array('((isset($cx[\'scopes\'][count($cx[\'scopes\'])-3][\'a\']) && is_array($cx[\'scopes\'][count($cx[\'scopes\'])-3])) ? $cx[\'scopes\'][count($cx[\'scopes\'])-3][\'a\'] : null)', '../../../[a]'), $method->invokeArgs(null,array(
            array(3,'a'), array('flags'=>array('spvar'=>true,'debug'=>0,'prop'=>0,'method'=>0,'mustlok'=>0))
)        ));
        $this->assertEquals(array('((isset($in[\'id\']) && is_array($in)) ? $in[\'id\'] : null)', 'this.[id]'), $method->invokeArgs(null,array(
            array(null, 'id'), array('flags'=>array('spvar'=>true,'debug'=>0,'prop'=>0,'method'=>0,'mustlok'=>0))
)        ));
        $this->assertEquals(array('LCRun3::v($cx, $in, array(\'id\'))', 'this.[id]'), $method->invokeArgs(null,array(
            array(null, 'id'), array('flags'=>array('prop'=>true,'spvar'=>true,'debug'=>0,'method'=>0,'mustlok'=>0,'standalone'=>0), 'lcrun' => 'LCRun3')
)        ));
    }
    /**
     * @covers LightnCandy::getExpression
     */
    public function testOn_getExpression() {
        $method = new ReflectionMethod('LightnCandy', 'getExpression');
        $method->setAccessible(true);
        $this->assertEquals('[a].[b]', $method->invokeArgs(null,array(
            0, false, array('a', 'b')
)        ));
        $this->assertEquals('@[root]', $method->invokeArgs(null,array(
            0, true, array('root')
)        ));
        $this->assertEquals('this', $method->invokeArgs(null,array(
            0, false, null
)        ));
        $this->assertEquals('this.[id]', $method->invokeArgs(null,array(
            0, false, array(null, 'id')
)        ));
        $this->assertEquals('@[root].[a].[b]', $method->invokeArgs(null,array(
            0, true, array('root', 'a', 'b')
)        ));
        $this->assertEquals('../../[a].[b]', $method->invokeArgs(null,array(
            2, false, array('a', 'b')
)        ));
        $this->assertEquals('../[a\'b]', $method->invokeArgs(null,array(
            1, false, array('a\'b')
)        ));
    }
    /**
     * @covers LightnCandy::fixVariable
     */
    public function testOn_fixVariable() {
        $method = new ReflectionMethod('LightnCandy', 'fixVariable');
        $method->setAccessible(true);
        $this->assertEquals(array('this'), $method->invokeArgs(null,array(
            'this', array('flags' => array('advar' => 0, 'this' => 0))
)        ));
        $this->assertEquals(array(), $method->invokeArgs(null,array(
            'this', array('flags' => array('advar' => 0, 'this' => 1))
)        ));
        $this->assertEquals(array(1), $method->invokeArgs(null,array(
            '../', array('flags' => array('advar' => 0, 'this' => 1, 'parent' => 1), 'usedFeature' => array('parent' => 0), 'scan' => true)
)        ));
        $this->assertEquals(array(1), $method->invokeArgs(null,array(
            '../.', array('flags' => array('advar' => 0, 'this' => 1, 'parent' => 1), 'usedFeature' => array('parent' => 0), 'scan' => true)
)        ));
        $this->assertEquals(array(1), $method->invokeArgs(null,array(
            '../this', array('flags' => array('advar' => 0, 'this' => 1, 'parent' => 1), 'usedFeature' => array('parent' => 0), 'scan' => true)
)        ));
        $this->assertEquals(array(1, 'a'), $method->invokeArgs(null,array(
            '../a', array('flags' => array('advar' => 0, 'this' => 1, 'parent' => 1), 'usedFeature' => array('parent' => 0), 'scan' => true)
)        ));
        $this->assertEquals(array(2, 'a', 'b'), $method->invokeArgs(null,array(
            '../../a.b', array('flags' => array('advar' => 0, 'this' => 0, 'parent' => 1), 'usedFeature' => array('parent' => 0), 'scan' => true)
)        ));
        $this->assertEquals(array(2, '[a]', 'b'), $method->invokeArgs(null,array(
            '../../[a].b', array('flags' => array('advar' => 0, 'this' => 0, 'parent' => 1), 'usedFeature' => array('parent' => 0), 'scan' => true)
)        ));
        $this->assertEquals(array(2, 'a', 'b'), $method->invokeArgs(null,array(
            '../../[a].b', array('flags' => array('advar' => 1, 'this' => 0, 'parent' => 1), 'usedFeature' => array('parent' => 0), 'scan' => true)
)        ));
        $this->assertEquals(array('id'), $method->invokeArgs(null,array(
            'this.id', array('flags' => array('advar' => 1, 'this' => 1, 'parent' => 1), 'usedFeature' => array('parent' => 0))
)        ));
        $this->assertEquals(array(0, '\'a.b\''), $method->invokeArgs(null,array(
            '"a.b"', array('flags' => array('advar' => 1, 'this' => 0, 'parent' => 1), 'usedFeature' => array('parent' => 0))
)        ));
        $this->assertEquals(array(0, '123'), $method->invokeArgs(null,array(
            '123', array('flags' => array('advar' => 1, 'this' => 0, 'parent' => 1), 'usedFeature' => array('parent' => 0))
)        ));
        $this->assertEquals(array(0, 'null'), $method->invokeArgs(null,array(
            'null', array('flags' => array('advar' => 1, 'this' => 0, 'parent' => 1), 'usedFeature' => array('parent' => 0))
)        ));
    }
    /**
     * @covers LightnCandy::parseTokenArgs
     */
    public function testOn_parseTokenArgs() {
        $method = new ReflectionMethod('LightnCandy', 'parseTokenArgs');
        $method->setAccessible(true);
        $this->assertEquals(array(false, array(array())), $method->invokeArgs(null,array(
            array(0,0,0,0,0,0,''), array('flags' => array('advar' => 0, 'this' => 1, 'namev' => 0, 'noesc' => 0), 'scan' => false, 'rawblock' => false)
)        ));
        $this->assertEquals(array(true, array(array())), $method->invokeArgs(null,array(
            array(0,0,0,'{{{',0,0,''), array('flags' => array('advar' => 0, 'this' => 1, 'namev' => 0, 'noesc' => 0), 'scan' => false, 'rawblock' => false)
)        ));
        $this->assertEquals(array(true, array(array())), $method->invokeArgs(null,array(
            array(0,0,0,0,0,0,''), array('flags' => array('advar' => 0, 'this' => 1, 'namev' => 0, 'noesc' => 1), 'scan' => false, 'rawblock' => false)
)        ));
        $this->assertEquals(array(false, array(array('a'))), $method->invokeArgs(null,array(
            array(0,0,0,0,0,0,'a'), array('flags' => array('advar' => 0, 'this' => 1, 'namev' => 0, 'noesc' => 0), 'scan' => false, 'rawblock' => false)
)        ));
        $this->assertEquals(array(false, array(array('a'), array('b'))), $method->invokeArgs(null,array(
            array(0,0,0,0,0,0,'a  b'), array('flags' => array('advar' => 0, 'this' => 1, 'namev' => 0, 'noesc' => 0), 'scan' => false, 'rawblock' => false)
)        ));
        $this->assertEquals(array(false, array(array('a'), array('"b'), array('c"'))), $method->invokeArgs(null,array(
            array(0,0,0,0,0,0,'a "b c"'), array('flags' => array('advar' => 0, 'this' => 1, 'namev' => 0, 'noesc' => 0), 'scan' => false, 'rawblock' => false)
)        ));
        $this->assertEquals(array(false, array(array('a'), array(0, '\'b c\''))), $method->invokeArgs(null,array(
            array(0,0,0,0,0,0,'a "b c"'), array('flags' => array('advar' => 1, 'this' => 1, 'namev' => 0, 'noesc' => 0), 'scan' => false, 'rawblock' => false)
)        ));
        $this->assertEquals(array(false, array(array('a'), array('[b'), array('c]'))), $method->invokeArgs(null,array(
            array(0,0,0,0,0,0,'a [b c]'), array('flags' => array('advar' => 0, 'this' => 1, 'namev' => 0, 'noesc' => 0), 'scan' => false, 'rawblock' => false)
)        ));
        $this->assertEquals(array(false, array(array('a'), array('[b'), array('c]'))), $method->invokeArgs(null,array(
            array(0,0,0,0,0,0,'a [b c]'), array('flags' => array('advar' => 0, 'this' => 1, 'namev' => 1, 'noesc' => 0), 'scan' => false, 'rawblock' => false)
)        ));
        $this->assertEquals(array(false, array(array('a'), array('b c'))), $method->invokeArgs(null,array(
            array(0,0,0,0,0,0,'a [b c]'), array('flags' => array('advar' => 1, 'this' => 1, 'namev' => 0, 'noesc' => 0), 'scan' => false, 'rawblock' => false)
)        ));
        $this->assertEquals(array(false, array(array('a'), array('b c'))), $method->invokeArgs(null,array(
            array(0,0,0,0,0,0,'a [b c]'), array('flags' => array('advar' => 1, 'this' => 1, 'namev' => 1, 'noesc' => 0), 'scan' => false, 'rawblock' => false)
)        ));
        $this->assertEquals(array(false, array(array('a'), 'q' => array('b c'))), $method->invokeArgs(null,array(
            array(0,0,0,0,0,0,'a q=[b c]'), array('flags' => array('advar' => 1, 'this' => 1, 'namev' => 1, 'noesc' => 0), 'scan' => false, 'rawblock' => false)
)        ));
        $this->assertEquals(array(false, array(array('a'), array('q=[b c'))), $method->invokeArgs(null,array(
            array(0,0,0,0,0,0,'a [q=[b c]'), array('flags' => array('advar' => 1, 'this' => 1, 'namev' => 1, 'noesc' => 0), 'scan' => false, 'rawblock' => false)
)        ));
        $this->assertEquals(array(false, array(array('a'), 'q' => array('[b'), array('c]'))), $method->invokeArgs(null,array(
            array(0,0,0,0,0,0,'a q=[b c]'), array('flags' => array('advar' => 0, 'this' => 1, 'namev' => 1, 'noesc' => 0), 'scan' => false, 'rawblock' => false)
)        ));
        $this->assertEquals(array(false, array(array('a'), 'q' => array('b'), array('c'))), $method->invokeArgs(null,array(
            array(0,0,0,0,0,0,'a [q]=b c'), array('flags' => array('advar' => 0, 'this' => 1, 'namev' => 1, 'noesc' => 0), 'scan' => false, 'rawblock' => false)
)        ));
        $this->assertEquals(array(false, array(array('a'), 'q' => array(0, '\'b c\''))), $method->invokeArgs(null,array(
            array(0,0,0,0,0,0,'a q="b c"'), array('flags' => array('advar' => 1, 'this' => 1, 'namev' => 1, 'noesc' => 0), 'scan' => false, 'rawblock' => false)
)        ));
        $this->assertEquals(array(false, array(array('(foo bar)'))), $method->invokeArgs(null,array(
            array(0,0,0,0,0,0,'(foo bar)'), array('flags' => array('advar' => 1, 'this' => 1, 'namev' => 1, 'noesc' => 0, 'exhlp' => 1), 'ops' => array('seperator' => ''), 'usedFeature' => array('subexp' => 0), 'scan' => false, 'rawblock' => false)
)        ));
        $this->assertEquals(array(false, array(array('foo'), array("'=='"), array('bar'))), $method->invokeArgs(null,array(
            array(0,0,0,0,0,0,"foo '==' bar"), array('flags' => array('advar' => 1, 'namev' => 1, 'noesc' => 0, 'this' => 0), 'scan' => false, 'rawblock' => false)
)        ));
        $this->assertEquals(array(false, array(array('( foo bar)'))), $method->invokeArgs(null,array(
            array(0,0,0,0,0,0,'( foo bar)'), array('flags' => array('advar' => 1, 'this' => 1, 'namev' => 1, 'noesc' => 0, 'exhlp' => 1), 'ops' => array('seperator' => ''), 'usedFeature' => array('subexp' => 0), 'scan' => false, 'rawblock' => false)
)        ));
        $this->assertEquals(array(false, array(array('a'), array(0, '\' b c\''))), $method->invokeArgs(null,array(
            array(0,0,0,0,0,0,'a " b c"'), array('flags' => array('advar' => 1, 'this' => 1, 'namev' => 0, 'noesc' => 0), 'scan' => false, 'rawblock' => false)
)        ));
        $this->assertEquals(array(false, array(array('a'), 'q' => array(0, '\' b c\''))), $method->invokeArgs(null,array(
            array(0,0,0,0,0,0,'a q=" b c"'), array('flags' => array('advar' => 1, 'this' => 1, 'namev' => 1, 'noesc' => 0), 'scan' => false, 'rawblock' => false)
)        ));
        $this->assertEquals(array(false, array(array('foo'), array(0, "' =='"), array('bar'))), $method->invokeArgs(null,array(
            array(0,0,0,0,0,0,"foo \' ==\' bar"), array('flags' => array('advar' => 1, 'namev' => 1, 'noesc' => 0, 'this' => 0), 'scan' => false, 'rawblock' => false)
)        ));
        $this->assertEquals(array(false, array(array('a'), array(' b c'))), $method->invokeArgs(null,array(
            array(0,0,0,0,0,0,'a [ b c]'), array('flags' => array('advar' => 1, 'this' => 1, 'namev' => 1, 'noesc' => 0), 'scan' => false, 'rawblock' => false)
)        ));
        $this->assertEquals(array(false, array(array('a'), 'q' => array(0, "' d e'"))), $method->invokeArgs(null,array(
            array(0,0,0,0,0,0,"a q=\' d e\'"), array('flags' => array('advar' => 1, 'this' => 1, 'namev' => 1, 'noesc' => 0), 'scan' => false, 'rawblock' => false)
)        ));
        $this->assertEquals(array(false, array('q' => array('( foo bar)'))), $method->invokeArgs(null,array(
            array(0,0,0,0,0,0,'q=( foo bar)'), array('flags' => array('advar' => 1, 'this' => 1, 'namev' => 1, 'noesc' => 0, 'exhlp' => 0), 'scan' => false, 'usedFeature' => array(), 'ops' => array('seperator' => 0), 'rawblock' => false)
)        ));
    }
    /**
     * @covers LightnCandy::tokenString
     */
    public function testOn_tokenString() {
        $method = new ReflectionMethod('LightnCandy', 'tokenString');
        $method->setAccessible(true);
        $this->assertEquals('b', $method->invokeArgs(null,array(
            array(0, 'a', 'b', 'c'), 1
)        ));
        $this->assertEquals('c', $method->invokeArgs(null,array(
            array(0, 'a', 'b', 'c', 'd', 'e')
)        ));
    }
    /**
     * @covers LightnCandy::validateStartEnd
     */
    public function testOn_validateStartEnd() {
        $method = new ReflectionMethod('LightnCandy', 'validateStartEnd');
        $method->setAccessible(true);
        $this->assertEquals(null, $method->invokeArgs(null,array(
            array_fill(0, 9, ''), array()
)        ));
        $this->assertEquals(null, $method->invokeArgs(null,array(
            array_fill(0, 9, '}}'), array()
)        ));
        $this->assertEquals(true, $method->invokeArgs(null,array(
            array_fill(0, 9, '{{{'), array()
)        ));
    }
    /**
     * @covers LightnCandy::validateOperations
     */
    public function testOn_validateOperations() {
        $method = new ReflectionMethod('LightnCandy', 'validateOperations');
        $method->setAccessible(true);
        $this->assertEquals(null, $method->invokeArgs(null,array(
            array(0, 0, 0, 0, 0, ''), array(), array()
)        ));
        $this->assertEquals(2, $method->invokeArgs(null,array(
            array(0, 0, 0, 0, 0, '^', '...'), array('usedFeature' => array('isec' => 1), 'level' => 0), array(array('foo'))
)        ));
        $this->assertEquals(3, $method->invokeArgs(null,array(
            array(0, 0, 0, 0, 0, '!', '...'), array('usedFeature' => array('comment' => 2)), array()
)        ));
        $this->assertEquals(true, $method->invokeArgs(null,array(
            array(0, 0, 0, 0, 0, '/'), array('stack' => array(1), 'level' => 1), array()
)        ));
        $this->assertEquals(4, $method->invokeArgs(null,array(
            array(0, 0, 0, 0, 0, '#', '...'), array('usedFeature' => array('sec' => 3), 'level' => 0), array(array('x'))
)        ));
        $this->assertEquals(5, $method->invokeArgs(null,array(
            array(0, 0, 0, 0, 0, '#', '...'), array('usedFeature' => array('if' => 4), 'level' => 0), array(array('if'))
)        ));
        $this->assertEquals(6, $method->invokeArgs(null,array(
            array(0, 0, 0, 0, 0, '#', '...'), array('usedFeature' => array('with' => 5), 'level' => 0, 'flags' => array('with' => 1)), array(array('with'))
)        ));
        $this->assertEquals(7, $method->invokeArgs(null,array(
            array(0, 0, 0, 0, 0, '#', '...'), array('usedFeature' => array('each' => 6), 'level' => 0), array(array('each'))
)        ));
        $this->assertEquals(8, $method->invokeArgs(null,array(
            array(0, 0, 0, 0, 0, '#', '...'), array('usedFeature' => array('unless' => 7), 'level' => 0), array(array('unless'))
)        ));
        $this->assertEquals(9, $method->invokeArgs(null,array(
            array(0, 0, 0, 0, 0, '#', '...'), array('blockhelpers' => array('abc' => ''), 'usedFeature' => array('bhelper' => 8), 'level' => 0), array(array('abc'))
)        ));
        $this->assertEquals(10, $method->invokeArgs(null,array(
            array(0, 0, 0, 0, 0, ' ', '...'), array('usedFeature' => array('delimiter' => 9), 'level' => 0), array()
)        ));
        $this->assertEquals(11, $method->invokeArgs(null,array(
            array(0, 0, 0, 0, 0, '#', '...'), array('hbhelpers' => array('abc' => ''), 'usedFeature' => array('hbhelper' => 10), 'level' => 0), array(array('abc'))
)        ));
        $this->assertEquals(true, $method->invokeArgs(null,array(
            array(0, 0, 0, 0, 0, '>', '...'), array('basedir' => array('.'), 'fileext' => array('.tmpl'), 'usedFeature' => array('unless' => 7, 'partial' => 7), 'level' => 0, 'flags' => array('skippartial' => 0)), array('test')
)        ));
    }
    /**
     * @covers LightnCandy::addUsageCount
     */
    public function testOn_addUsageCount() {
        $method = new ReflectionMethod('LightnCandy', 'addUsageCount');
        $method->setAccessible(true);
        $this->assertEquals(1, $method->invokeArgs(null,array(
            array('usedCount' => array('test' => array())), 'test', 'testname'
)        ));
        $this->assertEquals(3, $method->invokeArgs(null,array(
            array('usedCount' => array('test' => array('testname' => 2))), 'test', 'testname'
)        ));
        $this->assertEquals(5, $method->invokeArgs(null,array(
            array('usedCount' => array('test' => array('testname' => 2))), 'test', 'testname', 3
)        ));
    }
}
?>