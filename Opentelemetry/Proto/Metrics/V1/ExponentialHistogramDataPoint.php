<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: opentelemetry/proto/metrics/v1/metrics.proto

namespace Opentelemetry\Proto\Metrics\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * ExponentialHistogramDataPoint is a single data point in a timeseries that describes the
 * time-varying values of a ExponentialHistogram of double values. A ExponentialHistogram contains
 * summary statistics for a population of values, it may optionally contain the
 * distribution of those values across a set of buckets.
 *
 * Generated from protobuf message <code>opentelemetry.proto.metrics.v1.ExponentialHistogramDataPoint</code>
 */
class ExponentialHistogramDataPoint extends \Google\Protobuf\Internal\Message
{
    /**
     * The set of key/value pairs that uniquely identify the timeseries from
     * where this point belongs. The list may be empty (may contain 0 elements).
     * Attribute keys MUST be unique (it is not allowed to have more than one
     * attribute with the same key).
     *
     * Generated from protobuf field <code>repeated .opentelemetry.proto.common.v1.KeyValue attributes = 1;</code>
     */
    private $attributes;
    /**
     * StartTimeUnixNano is optional but strongly encouraged, see the
     * the detailed comments above Metric.
     * Value is UNIX Epoch time in nanoseconds since 00:00:00 UTC on 1 January
     * 1970.
     *
     * Generated from protobuf field <code>fixed64 start_time_unix_nano = 2;</code>
     */
    protected $start_time_unix_nano = 0;
    /**
     * TimeUnixNano is required, see the detailed comments above Metric.
     * Value is UNIX Epoch time in nanoseconds since 00:00:00 UTC on 1 January
     * 1970.
     *
     * Generated from protobuf field <code>fixed64 time_unix_nano = 3;</code>
     */
    protected $time_unix_nano = 0;
    /**
     * count is the number of values in the population. Must be
     * non-negative. This value must be equal to the sum of the "bucket_counts"
     * values in the positive and negative Buckets plus the "zero_count" field.
     *
     * Generated from protobuf field <code>fixed64 count = 4;</code>
     */
    protected $count = 0;
    /**
     * sum of the values in the population. If count is zero then this field
     * must be zero.
     * Note: Sum should only be filled out when measuring non-negative discrete
     * events, and is assumed to be monotonic over the values of these events.
     * Negative events *can* be recorded, but sum should not be filled out when
     * doing so.  This is specifically to enforce compatibility w/ OpenMetrics,
     * see: https://github.com/prometheus/OpenMetrics/blob/v1.0.0/specification/OpenMetrics.md#histogram
     *
     * Generated from protobuf field <code>optional double sum = 5;</code>
     */
    protected $sum = null;
    /**
     * scale describes the resolution of the histogram.  Boundaries are
     * located at powers of the base, where:
     *   base = (2^(2^-scale))
     * The histogram bucket identified by `index`, a signed integer,
     * contains values that are greater than (base^index) and
     * less than or equal to (base^(index+1)).
     * The positive and negative ranges of the histogram are expressed
     * separately.  Negative values are mapped by their absolute value
     * into the negative range using the same scale as the positive range.
     * scale is not restricted by the protocol, as the permissible
     * values depend on the range of the data.
     *
     * Generated from protobuf field <code>sint32 scale = 6;</code>
     */
    protected $scale = 0;
    /**
     * zero_count is the count of values that are either exactly zero or
     * within the region considered zero by the instrumentation at the
     * tolerated degree of precision.  This bucket stores values that
     * cannot be expressed using the standard exponential formula as
     * well as values that have been rounded to zero.
     * Implementations MAY consider the zero bucket to have probability
     * mass equal to (zero_count / count).
     *
     * Generated from protobuf field <code>fixed64 zero_count = 7;</code>
     */
    protected $zero_count = 0;
    /**
     * positive carries the positive range of exponential bucket counts.
     *
     * Generated from protobuf field <code>.opentelemetry.proto.metrics.v1.ExponentialHistogramDataPoint.Buckets positive = 8;</code>
     */
    protected $positive = null;
    /**
     * negative carries the negative range of exponential bucket counts.
     *
     * Generated from protobuf field <code>.opentelemetry.proto.metrics.v1.ExponentialHistogramDataPoint.Buckets negative = 9;</code>
     */
    protected $negative = null;
    /**
     * Flags that apply to this specific data point.  See DataPointFlags
     * for the available flags and their meaning.
     *
     * Generated from protobuf field <code>uint32 flags = 10;</code>
     */
    protected $flags = 0;
    /**
     * (Optional) List of exemplars collected from
     * measurements that were used to form the data point
     *
     * Generated from protobuf field <code>repeated .opentelemetry.proto.metrics.v1.Exemplar exemplars = 11;</code>
     */
    private $exemplars;
    /**
     * min is the minimum value over (start_time, end_time].
     *
     * Generated from protobuf field <code>optional double min = 12;</code>
     */
    protected $min = null;
    /**
     * max is the maximum value over (start_time, end_time].
     *
     * Generated from protobuf field <code>optional double max = 13;</code>
     */
    protected $max = null;
    /**
     * ZeroThreshold may be optionally set to convey the width of the zero
     * region. Where the zero region is defined as the closed interval
     * [-ZeroThreshold, ZeroThreshold].
     * When ZeroThreshold is 0, zero count bucket stores values that cannot be
     * expressed using the standard exponential formula as well as values that
     * have been rounded to zero.
     *
     * Generated from protobuf field <code>double zero_threshold = 14;</code>
     */
    protected $zero_threshold = 0.0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Opentelemetry\Proto\Common\V1\KeyValue[]|\Google\Protobuf\Internal\RepeatedField $attributes
     *           The set of key/value pairs that uniquely identify the timeseries from
     *           where this point belongs. The list may be empty (may contain 0 elements).
     *           Attribute keys MUST be unique (it is not allowed to have more than one
     *           attribute with the same key).
     *     @type int|string $start_time_unix_nano
     *           StartTimeUnixNano is optional but strongly encouraged, see the
     *           the detailed comments above Metric.
     *           Value is UNIX Epoch time in nanoseconds since 00:00:00 UTC on 1 January
     *           1970.
     *     @type int|string $time_unix_nano
     *           TimeUnixNano is required, see the detailed comments above Metric.
     *           Value is UNIX Epoch time in nanoseconds since 00:00:00 UTC on 1 January
     *           1970.
     *     @type int|string $count
     *           count is the number of values in the population. Must be
     *           non-negative. This value must be equal to the sum of the "bucket_counts"
     *           values in the positive and negative Buckets plus the "zero_count" field.
     *     @type float $sum
     *           sum of the values in the population. If count is zero then this field
     *           must be zero.
     *           Note: Sum should only be filled out when measuring non-negative discrete
     *           events, and is assumed to be monotonic over the values of these events.
     *           Negative events *can* be recorded, but sum should not be filled out when
     *           doing so.  This is specifically to enforce compatibility w/ OpenMetrics,
     *           see: https://github.com/prometheus/OpenMetrics/blob/v1.0.0/specification/OpenMetrics.md#histogram
     *     @type int $scale
     *           scale describes the resolution of the histogram.  Boundaries are
     *           located at powers of the base, where:
     *             base = (2^(2^-scale))
     *           The histogram bucket identified by `index`, a signed integer,
     *           contains values that are greater than (base^index) and
     *           less than or equal to (base^(index+1)).
     *           The positive and negative ranges of the histogram are expressed
     *           separately.  Negative values are mapped by their absolute value
     *           into the negative range using the same scale as the positive range.
     *           scale is not restricted by the protocol, as the permissible
     *           values depend on the range of the data.
     *     @type int|string $zero_count
     *           zero_count is the count of values that are either exactly zero or
     *           within the region considered zero by the instrumentation at the
     *           tolerated degree of precision.  This bucket stores values that
     *           cannot be expressed using the standard exponential formula as
     *           well as values that have been rounded to zero.
     *           Implementations MAY consider the zero bucket to have probability
     *           mass equal to (zero_count / count).
     *     @type \Opentelemetry\Proto\Metrics\V1\ExponentialHistogramDataPoint\Buckets $positive
     *           positive carries the positive range of exponential bucket counts.
     *     @type \Opentelemetry\Proto\Metrics\V1\ExponentialHistogramDataPoint\Buckets $negative
     *           negative carries the negative range of exponential bucket counts.
     *     @type int $flags
     *           Flags that apply to this specific data point.  See DataPointFlags
     *           for the available flags and their meaning.
     *     @type \Opentelemetry\Proto\Metrics\V1\Exemplar[]|\Google\Protobuf\Internal\RepeatedField $exemplars
     *           (Optional) List of exemplars collected from
     *           measurements that were used to form the data point
     *     @type float $min
     *           min is the minimum value over (start_time, end_time].
     *     @type float $max
     *           max is the maximum value over (start_time, end_time].
     *     @type float $zero_threshold
     *           ZeroThreshold may be optionally set to convey the width of the zero
     *           region. Where the zero region is defined as the closed interval
     *           [-ZeroThreshold, ZeroThreshold].
     *           When ZeroThreshold is 0, zero count bucket stores values that cannot be
     *           expressed using the standard exponential formula as well as values that
     *           have been rounded to zero.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Opentelemetry\Proto\Metrics\V1\Metrics::initOnce();
        parent::__construct($data);
    }

    /**
     * The set of key/value pairs that uniquely identify the timeseries from
     * where this point belongs. The list may be empty (may contain 0 elements).
     * Attribute keys MUST be unique (it is not allowed to have more than one
     * attribute with the same key).
     *
     * Generated from protobuf field <code>repeated .opentelemetry.proto.common.v1.KeyValue attributes = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getAttributes()
    {
        return $this->attributes;
    }

    /**
     * The set of key/value pairs that uniquely identify the timeseries from
     * where this point belongs. The list may be empty (may contain 0 elements).
     * Attribute keys MUST be unique (it is not allowed to have more than one
     * attribute with the same key).
     *
     * Generated from protobuf field <code>repeated .opentelemetry.proto.common.v1.KeyValue attributes = 1;</code>
     * @param \Opentelemetry\Proto\Common\V1\KeyValue[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setAttributes($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Opentelemetry\Proto\Common\V1\KeyValue::class);
        $this->attributes = $arr;

        return $this;
    }

    /**
     * StartTimeUnixNano is optional but strongly encouraged, see the
     * the detailed comments above Metric.
     * Value is UNIX Epoch time in nanoseconds since 00:00:00 UTC on 1 January
     * 1970.
     *
     * Generated from protobuf field <code>fixed64 start_time_unix_nano = 2;</code>
     * @return int|string
     */
    public function getStartTimeUnixNano()
    {
        return $this->start_time_unix_nano;
    }

    /**
     * StartTimeUnixNano is optional but strongly encouraged, see the
     * the detailed comments above Metric.
     * Value is UNIX Epoch time in nanoseconds since 00:00:00 UTC on 1 January
     * 1970.
     *
     * Generated from protobuf field <code>fixed64 start_time_unix_nano = 2;</code>
     * @param int|string $var
     * @return $this
     */
    public function setStartTimeUnixNano($var)
    {
        GPBUtil::checkUint64($var);
        $this->start_time_unix_nano = $var;

        return $this;
    }

    /**
     * TimeUnixNano is required, see the detailed comments above Metric.
     * Value is UNIX Epoch time in nanoseconds since 00:00:00 UTC on 1 January
     * 1970.
     *
     * Generated from protobuf field <code>fixed64 time_unix_nano = 3;</code>
     * @return int|string
     */
    public function getTimeUnixNano()
    {
        return $this->time_unix_nano;
    }

    /**
     * TimeUnixNano is required, see the detailed comments above Metric.
     * Value is UNIX Epoch time in nanoseconds since 00:00:00 UTC on 1 January
     * 1970.
     *
     * Generated from protobuf field <code>fixed64 time_unix_nano = 3;</code>
     * @param int|string $var
     * @return $this
     */
    public function setTimeUnixNano($var)
    {
        GPBUtil::checkUint64($var);
        $this->time_unix_nano = $var;

        return $this;
    }

    /**
     * count is the number of values in the population. Must be
     * non-negative. This value must be equal to the sum of the "bucket_counts"
     * values in the positive and negative Buckets plus the "zero_count" field.
     *
     * Generated from protobuf field <code>fixed64 count = 4;</code>
     * @return int|string
     */
    public function getCount()
    {
        return $this->count;
    }

    /**
     * count is the number of values in the population. Must be
     * non-negative. This value must be equal to the sum of the "bucket_counts"
     * values in the positive and negative Buckets plus the "zero_count" field.
     *
     * Generated from protobuf field <code>fixed64 count = 4;</code>
     * @param int|string $var
     * @return $this
     */
    public function setCount($var)
    {
        GPBUtil::checkUint64($var);
        $this->count = $var;

        return $this;
    }

    /**
     * sum of the values in the population. If count is zero then this field
     * must be zero.
     * Note: Sum should only be filled out when measuring non-negative discrete
     * events, and is assumed to be monotonic over the values of these events.
     * Negative events *can* be recorded, but sum should not be filled out when
     * doing so.  This is specifically to enforce compatibility w/ OpenMetrics,
     * see: https://github.com/prometheus/OpenMetrics/blob/v1.0.0/specification/OpenMetrics.md#histogram
     *
     * Generated from protobuf field <code>optional double sum = 5;</code>
     * @return float
     */
    public function getSum()
    {
        return isset($this->sum) ? $this->sum : 0.0;
    }

    public function hasSum()
    {
        return isset($this->sum);
    }

    public function clearSum()
    {
        unset($this->sum);
    }

    /**
     * sum of the values in the population. If count is zero then this field
     * must be zero.
     * Note: Sum should only be filled out when measuring non-negative discrete
     * events, and is assumed to be monotonic over the values of these events.
     * Negative events *can* be recorded, but sum should not be filled out when
     * doing so.  This is specifically to enforce compatibility w/ OpenMetrics,
     * see: https://github.com/prometheus/OpenMetrics/blob/v1.0.0/specification/OpenMetrics.md#histogram
     *
     * Generated from protobuf field <code>optional double sum = 5;</code>
     * @param float $var
     * @return $this
     */
    public function setSum($var)
    {
        GPBUtil::checkDouble($var);
        $this->sum = $var;

        return $this;
    }

    /**
     * scale describes the resolution of the histogram.  Boundaries are
     * located at powers of the base, where:
     *   base = (2^(2^-scale))
     * The histogram bucket identified by `index`, a signed integer,
     * contains values that are greater than (base^index) and
     * less than or equal to (base^(index+1)).
     * The positive and negative ranges of the histogram are expressed
     * separately.  Negative values are mapped by their absolute value
     * into the negative range using the same scale as the positive range.
     * scale is not restricted by the protocol, as the permissible
     * values depend on the range of the data.
     *
     * Generated from protobuf field <code>sint32 scale = 6;</code>
     * @return int
     */
    public function getScale()
    {
        return $this->scale;
    }

    /**
     * scale describes the resolution of the histogram.  Boundaries are
     * located at powers of the base, where:
     *   base = (2^(2^-scale))
     * The histogram bucket identified by `index`, a signed integer,
     * contains values that are greater than (base^index) and
     * less than or equal to (base^(index+1)).
     * The positive and negative ranges of the histogram are expressed
     * separately.  Negative values are mapped by their absolute value
     * into the negative range using the same scale as the positive range.
     * scale is not restricted by the protocol, as the permissible
     * values depend on the range of the data.
     *
     * Generated from protobuf field <code>sint32 scale = 6;</code>
     * @param int $var
     * @return $this
     */
    public function setScale($var)
    {
        GPBUtil::checkInt32($var);
        $this->scale = $var;

        return $this;
    }

    /**
     * zero_count is the count of values that are either exactly zero or
     * within the region considered zero by the instrumentation at the
     * tolerated degree of precision.  This bucket stores values that
     * cannot be expressed using the standard exponential formula as
     * well as values that have been rounded to zero.
     * Implementations MAY consider the zero bucket to have probability
     * mass equal to (zero_count / count).
     *
     * Generated from protobuf field <code>fixed64 zero_count = 7;</code>
     * @return int|string
     */
    public function getZeroCount()
    {
        return $this->zero_count;
    }

    /**
     * zero_count is the count of values that are either exactly zero or
     * within the region considered zero by the instrumentation at the
     * tolerated degree of precision.  This bucket stores values that
     * cannot be expressed using the standard exponential formula as
     * well as values that have been rounded to zero.
     * Implementations MAY consider the zero bucket to have probability
     * mass equal to (zero_count / count).
     *
     * Generated from protobuf field <code>fixed64 zero_count = 7;</code>
     * @param int|string $var
     * @return $this
     */
    public function setZeroCount($var)
    {
        GPBUtil::checkUint64($var);
        $this->zero_count = $var;

        return $this;
    }

    /**
     * positive carries the positive range of exponential bucket counts.
     *
     * Generated from protobuf field <code>.opentelemetry.proto.metrics.v1.ExponentialHistogramDataPoint.Buckets positive = 8;</code>
     * @return \Opentelemetry\Proto\Metrics\V1\ExponentialHistogramDataPoint\Buckets|null
     */
    public function getPositive()
    {
        return $this->positive;
    }

    public function hasPositive()
    {
        return isset($this->positive);
    }

    public function clearPositive()
    {
        unset($this->positive);
    }

    /**
     * positive carries the positive range of exponential bucket counts.
     *
     * Generated from protobuf field <code>.opentelemetry.proto.metrics.v1.ExponentialHistogramDataPoint.Buckets positive = 8;</code>
     * @param \Opentelemetry\Proto\Metrics\V1\ExponentialHistogramDataPoint\Buckets $var
     * @return $this
     */
    public function setPositive($var)
    {
        GPBUtil::checkMessage($var, \Opentelemetry\Proto\Metrics\V1\ExponentialHistogramDataPoint\Buckets::class);
        $this->positive = $var;

        return $this;
    }

    /**
     * negative carries the negative range of exponential bucket counts.
     *
     * Generated from protobuf field <code>.opentelemetry.proto.metrics.v1.ExponentialHistogramDataPoint.Buckets negative = 9;</code>
     * @return \Opentelemetry\Proto\Metrics\V1\ExponentialHistogramDataPoint\Buckets|null
     */
    public function getNegative()
    {
        return $this->negative;
    }

    public function hasNegative()
    {
        return isset($this->negative);
    }

    public function clearNegative()
    {
        unset($this->negative);
    }

    /**
     * negative carries the negative range of exponential bucket counts.
     *
     * Generated from protobuf field <code>.opentelemetry.proto.metrics.v1.ExponentialHistogramDataPoint.Buckets negative = 9;</code>
     * @param \Opentelemetry\Proto\Metrics\V1\ExponentialHistogramDataPoint\Buckets $var
     * @return $this
     */
    public function setNegative($var)
    {
        GPBUtil::checkMessage($var, \Opentelemetry\Proto\Metrics\V1\ExponentialHistogramDataPoint\Buckets::class);
        $this->negative = $var;

        return $this;
    }

    /**
     * Flags that apply to this specific data point.  See DataPointFlags
     * for the available flags and their meaning.
     *
     * Generated from protobuf field <code>uint32 flags = 10;</code>
     * @return int
     */
    public function getFlags()
    {
        return $this->flags;
    }

    /**
     * Flags that apply to this specific data point.  See DataPointFlags
     * for the available flags and their meaning.
     *
     * Generated from protobuf field <code>uint32 flags = 10;</code>
     * @param int $var
     * @return $this
     */
    public function setFlags($var)
    {
        GPBUtil::checkUint32($var);
        $this->flags = $var;

        return $this;
    }

    /**
     * (Optional) List of exemplars collected from
     * measurements that were used to form the data point
     *
     * Generated from protobuf field <code>repeated .opentelemetry.proto.metrics.v1.Exemplar exemplars = 11;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getExemplars()
    {
        return $this->exemplars;
    }

    /**
     * (Optional) List of exemplars collected from
     * measurements that were used to form the data point
     *
     * Generated from protobuf field <code>repeated .opentelemetry.proto.metrics.v1.Exemplar exemplars = 11;</code>
     * @param \Opentelemetry\Proto\Metrics\V1\Exemplar[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setExemplars($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Opentelemetry\Proto\Metrics\V1\Exemplar::class);
        $this->exemplars = $arr;

        return $this;
    }

    /**
     * min is the minimum value over (start_time, end_time].
     *
     * Generated from protobuf field <code>optional double min = 12;</code>
     * @return float
     */
    public function getMin()
    {
        return isset($this->min) ? $this->min : 0.0;
    }

    public function hasMin()
    {
        return isset($this->min);
    }

    public function clearMin()
    {
        unset($this->min);
    }

    /**
     * min is the minimum value over (start_time, end_time].
     *
     * Generated from protobuf field <code>optional double min = 12;</code>
     * @param float $var
     * @return $this
     */
    public function setMin($var)
    {
        GPBUtil::checkDouble($var);
        $this->min = $var;

        return $this;
    }

    /**
     * max is the maximum value over (start_time, end_time].
     *
     * Generated from protobuf field <code>optional double max = 13;</code>
     * @return float
     */
    public function getMax()
    {
        return isset($this->max) ? $this->max : 0.0;
    }

    public function hasMax()
    {
        return isset($this->max);
    }

    public function clearMax()
    {
        unset($this->max);
    }

    /**
     * max is the maximum value over (start_time, end_time].
     *
     * Generated from protobuf field <code>optional double max = 13;</code>
     * @param float $var
     * @return $this
     */
    public function setMax($var)
    {
        GPBUtil::checkDouble($var);
        $this->max = $var;

        return $this;
    }

    /**
     * ZeroThreshold may be optionally set to convey the width of the zero
     * region. Where the zero region is defined as the closed interval
     * [-ZeroThreshold, ZeroThreshold].
     * When ZeroThreshold is 0, zero count bucket stores values that cannot be
     * expressed using the standard exponential formula as well as values that
     * have been rounded to zero.
     *
     * Generated from protobuf field <code>double zero_threshold = 14;</code>
     * @return float
     */
    public function getZeroThreshold()
    {
        return $this->zero_threshold;
    }

    /**
     * ZeroThreshold may be optionally set to convey the width of the zero
     * region. Where the zero region is defined as the closed interval
     * [-ZeroThreshold, ZeroThreshold].
     * When ZeroThreshold is 0, zero count bucket stores values that cannot be
     * expressed using the standard exponential formula as well as values that
     * have been rounded to zero.
     *
     * Generated from protobuf field <code>double zero_threshold = 14;</code>
     * @param float $var
     * @return $this
     */
    public function setZeroThreshold($var)
    {
        GPBUtil::checkDouble($var);
        $this->zero_threshold = $var;

        return $this;
    }

}

