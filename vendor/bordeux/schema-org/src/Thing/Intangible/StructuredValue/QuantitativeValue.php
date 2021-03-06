<?php

namespace Bordeux\SchemaOrg\Thing\Intangible\StructuredValue;

/**
 * Generated by bordeux/schema
 *
 * @author Krzysztof Bednarczyk <schema@bordeux.net>
 * @link http://schema.org/QuantitativeValue
 *
 *
 * -------------------------------- MaxValue ---------------------------------------------
 *
 * @property Number|Number[] maxValue
 *
 * @method Number|Number[] getMaxValue() The upper of the product characteristic.
 *
 * @method QuantitativeValue setMaxValue(Number $maxValue ) setMaxValue(Number[] $maxValue )The upper of the product characteristic.
 *
 *
 * -------------------------------- MinValue ---------------------------------------------
 *
 * @property Number|Number[] minValue
 *
 * @method Number|Number[] getMinValue() The lower value of the product characteristic.
 *
 * @method QuantitativeValue setMinValue(Number $minValue ) setMinValue(Number[] $minValue )The lower value of the product characteristic.
 *
 *
 * -------------------------------- UnitCode ---------------------------------------------
 *
 * @property string|string[] unitCode
 *
 * @method string|string[] getUnitCode() The unit of measurement given using the UN/CEFACT Common Code (3 characters).
 *
 * @method QuantitativeValue setUnitCode(string $unitCode ) setUnitCode(string[] $unitCode )The unit of measurement given using the UN/CEFACT Common Code (3 characters).
 *
 *
 * -------------------------------- Value ---------------------------------------------
 *
 * @property Number|Number[] value
 *
 * @method Number|Number[] getValue() The value of the product characteristic.
 *
 * @method QuantitativeValue setValue(Number $value ) setValue(Number[] $value )The value of the product characteristic.
 *
 *
 * -------------------------------- ValueReference ---------------------------------------------
 *
 * @property \Bordeux\SchemaOrg\Thing\Intangible\Enumeration|\Bordeux\SchemaOrg\Thing\Intangible\Enumeration[]|\Bordeux\SchemaOrg\Thing\Intangible\StructuredValue|\Bordeux\SchemaOrg\Thing\Intangible\StructuredValue[] valueReference
 *
 * @method \Bordeux\SchemaOrg\Thing\Intangible\Enumeration|\Bordeux\SchemaOrg\Thing\Intangible\Enumeration[]|\Bordeux\SchemaOrg\Thing\Intangible\StructuredValue|\Bordeux\SchemaOrg\Thing\Intangible\StructuredValue[] getValueReference() A pointer to a secondary value that provides additional information on the original value, e.g. a reference temperature.
 *
 * @method QuantitativeValue setValueReference(\Bordeux\SchemaOrg\Thing\Intangible\Enumeration $valueReference ) setValueReference(\Bordeux\SchemaOrg\Thing\Intangible\Enumeration[] $valueReference ) setValueReference(\Bordeux\SchemaOrg\Thing\Intangible\StructuredValue $valueReference ) setValueReference(\Bordeux\SchemaOrg\Thing\Intangible\StructuredValue[] $valueReference )A pointer to a secondary value that provides additional information on the original value, e.g. a reference temperature.
 *
 *
 */
 class QuantitativeValue extends \Bordeux\SchemaOrg\Thing\Intangible\StructuredValue {

 }