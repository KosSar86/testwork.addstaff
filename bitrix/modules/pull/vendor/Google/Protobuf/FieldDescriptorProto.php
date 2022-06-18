<?php
/**
 * Generated by Protobuf protoc plugin.
 *
 * File descriptor : descriptor.proto
 */


namespace google\protobuf;

/**
 * Protobuf message : google.protobuf.FieldDescriptorProto
 */
class FieldDescriptorProto extends \Protobuf\AbstractMessage
{

    /**
     * @var \Protobuf\UnknownFieldSet
     */
    protected $unknownFieldSet = null;

    /**
     * @var \Protobuf\Extension\ExtensionFieldMap
     */
    protected $extensions = null;

    /**
     * name optional string = 1
     *
     * @var string
     */
    protected $name = null;

    /**
     * number optional int32 = 3
     *
     * @var int
     */
    protected $number = null;

    /**
     * label optional enum = 4
     *
     * @var \google\protobuf\FieldDescriptorProto\Label
     */
    protected $label = null;

    /**
     * type optional enum = 5
     *
     * @var \google\protobuf\FieldDescriptorProto\Type
     */
    protected $type = null;

    /**
     * type_name optional string = 6
     *
     * @var string
     */
    protected $type_name = null;

    /**
     * extendee optional string = 2
     *
     * @var string
     */
    protected $extendee = null;

    /**
     * default_value optional string = 7
     *
     * @var string
     */
    protected $default_value = null;

    /**
     * oneof_index optional int32 = 9
     *
     * @var int
     */
    protected $oneof_index = null;

    /**
     * json_name optional string = 10
     *
     * @var string
     */
    protected $json_name = null;

    /**
     * options optional message = 8
     *
     * @var \google\protobuf\FieldOptions
     */
    protected $options = null;

    /**
     * Check if 'name' has a value
     *
     * @return bool
     */
    public function hasName()
    {
        return $this->name !== null;
    }

    /**
     * Get 'name' value
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set 'name' value
     *
     * @param string $value
     */
    public function setName($value = null)
    {
        $this->name = $value;
    }

    /**
     * Check if 'number' has a value
     *
     * @return bool
     */
    public function hasNumber()
    {
        return $this->number !== null;
    }

    /**
     * Get 'number' value
     *
     * @return int
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * Set 'number' value
     *
     * @param int $value
     */
    public function setNumber($value = null)
    {
        $this->number = $value;
    }

    /**
     * Check if 'label' has a value
     *
     * @return bool
     */
    public function hasLabel()
    {
        return $this->label !== null;
    }

    /**
     * Get 'label' value
     *
     * @return \google\protobuf\FieldDescriptorProto\Label
     */
    public function getLabel()
    {
        return $this->label;
    }

    /**
     * Set 'label' value
     *
     * @param \google\protobuf\FieldDescriptorProto\Label $value
     */
    public function setLabel(\google\protobuf\FieldDescriptorProto\Label $value = null)
    {
        $this->label = $value;
    }

    /**
     * Check if 'type' has a value
     *
     * @return bool
     */
    public function hasType()
    {
        return $this->type !== null;
    }

    /**
     * Get 'type' value
     *
     * @return \google\protobuf\FieldDescriptorProto\Type
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set 'type' value
     *
     * @param \google\protobuf\FieldDescriptorProto\Type $value
     */
    public function setType(\google\protobuf\FieldDescriptorProto\Type $value = null)
    {
        $this->type = $value;
    }

    /**
     * Check if 'type_name' has a value
     *
     * @return bool
     */
    public function hasTypeName()
    {
        return $this->type_name !== null;
    }

    /**
     * Get 'type_name' value
     *
     * @return string
     */
    public function getTypeName()
    {
        return $this->type_name;
    }

    /**
     * Set 'type_name' value
     *
     * @param string $value
     */
    public function setTypeName($value = null)
    {
        $this->type_name = $value;
    }

    /**
     * Check if 'extendee' has a value
     *
     * @return bool
     */
    public function hasExtendee()
    {
        return $this->extendee !== null;
    }

    /**
     * Get 'extendee' value
     *
     * @return string
     */
    public function getExtendee()
    {
        return $this->extendee;
    }

    /**
     * Set 'extendee' value
     *
     * @param string $value
     */
    public function setExtendee($value = null)
    {
        $this->extendee = $value;
    }

    /**
     * Check if 'default_value' has a value
     *
     * @return bool
     */
    public function hasDefaultValue()
    {
        return $this->default_value !== null;
    }

    /**
     * Get 'default_value' value
     *
     * @return string
     */
    public function getDefaultValue()
    {
        return $this->default_value;
    }

    /**
     * Set 'default_value' value
     *
     * @param string $value
     */
    public function setDefaultValue($value = null)
    {
        $this->default_value = $value;
    }

    /**
     * Check if 'oneof_index' has a value
     *
     * @return bool
     */
    public function hasOneofIndex()
    {
        return $this->oneof_index !== null;
    }

    /**
     * Get 'oneof_index' value
     *
     * @return int
     */
    public function getOneofIndex()
    {
        return $this->oneof_index;
    }

    /**
     * Set 'oneof_index' value
     *
     * @param int $value
     */
    public function setOneofIndex($value = null)
    {
        $this->oneof_index = $value;
    }

    /**
     * Check if 'json_name' has a value
     *
     * @return bool
     */
    public function hasJsonName()
    {
        return $this->json_name !== null;
    }

    /**
     * Get 'json_name' value
     *
     * @return string
     */
    public function getJsonName()
    {
        return $this->json_name;
    }

    /**
     * Set 'json_name' value
     *
     * @param string $value
     */
    public function setJsonName($value = null)
    {
        $this->json_name = $value;
    }

    /**
     * Check if 'options' has a value
     *
     * @return bool
     */
    public function hasOptions()
    {
        return $this->options !== null;
    }

    /**
     * Get 'options' value
     *
     * @return \google\protobuf\FieldOptions
     */
    public function getOptions()
    {
        return $this->options;
    }

    /**
     * Set 'options' value
     *
     * @param \google\protobuf\FieldOptions $value
     */
    public function setOptions(\google\protobuf\FieldOptions $value = null)
    {
        $this->options = $value;
    }

    /**
     * {@inheritdoc}
     */
    public function extensions()
    {
        if ( $this->extensions !== null) {
            return $this->extensions;
        }

        return $this->extensions = new \Protobuf\Extension\ExtensionFieldMap(__CLASS__);
    }

    /**
     * {@inheritdoc}
     */
    public function unknownFieldSet()
    {
        return $this->unknownFieldSet;
    }

    /**
     * {@inheritdoc}
     */
    public static function fromStream($stream, \Protobuf\Configuration $configuration = null)
    {
        return new self($stream, $configuration);
    }

    /**
     * {@inheritdoc}
     */
    public static function fromArray(array $values)
    {
        $message = new self();
        $values  = array_merge([
            'name' => null,
            'number' => null,
            'label' => null,
            'type' => null,
            'type_name' => null,
            'extendee' => null,
            'default_value' => null,
            'oneof_index' => null,
            'json_name' => null,
            'options' => null
        ], $values);

        $message->setName($values['name']);
        $message->setNumber($values['number']);
        $message->setLabel($values['label']);
        $message->setType($values['type']);
        $message->setTypeName($values['type_name']);
        $message->setExtendee($values['extendee']);
        $message->setDefaultValue($values['default_value']);
        $message->setOneofIndex($values['oneof_index']);
        $message->setJsonName($values['json_name']);
        $message->setOptions($values['options']);

        return $message;
    }

    /**
     * {@inheritdoc}
     */
    public static function descriptor()
    {
        return \google\protobuf\DescriptorProto::fromArray([
            'name'      => 'FieldDescriptorProto',
            'field'     => [
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 1,
                    'name' => 'name',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_STRING(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 3,
                    'name' => 'number',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_INT32(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 4,
                    'name' => 'label',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_ENUM(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL(),
                    'type_name' => '.google.protobuf.FieldDescriptorProto.Label'
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 5,
                    'name' => 'type',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_ENUM(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL(),
                    'type_name' => '.google.protobuf.FieldDescriptorProto.Type'
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 6,
                    'name' => 'type_name',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_STRING(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 2,
                    'name' => 'extendee',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_STRING(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 7,
                    'name' => 'default_value',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_STRING(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 9,
                    'name' => 'oneof_index',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_INT32(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 10,
                    'name' => 'json_name',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_STRING(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 8,
                    'name' => 'options',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_MESSAGE(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL(),
                    'type_name' => '.google.protobuf.FieldOptions'
                ]),
            ],
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function toStream(\Protobuf\Configuration $configuration = null)
    {
        $config  = $configuration ?: \Protobuf\Configuration::getInstance();
        $context = $config->createWriteContext();
        $stream  = $context->getStream();

        $this->writeTo($context);
        $stream->seek(0);

        return $stream;
    }

    /**
     * {@inheritdoc}
     */
    public function writeTo(\Protobuf\WriteContext $context)
    {
        $stream      = $context->getStream();
        $writer      = $context->getWriter();
        $sizeContext = $context->getComputeSizeContext();

        if ($this->name !== null) {
            $writer->writeVarint($stream, 10);
            $writer->writeString($stream, $this->name);
        }

        if ($this->number !== null) {
            $writer->writeVarint($stream, 24);
            $writer->writeVarint($stream, $this->number);
        }

        if ($this->label !== null) {
            $writer->writeVarint($stream, 32);
            $writer->writeVarint($stream, $this->label->value());
        }

        if ($this->type !== null) {
            $writer->writeVarint($stream, 40);
            $writer->writeVarint($stream, $this->type->value());
        }

        if ($this->type_name !== null) {
            $writer->writeVarint($stream, 50);
            $writer->writeString($stream, $this->type_name);
        }

        if ($this->extendee !== null) {
            $writer->writeVarint($stream, 18);
            $writer->writeString($stream, $this->extendee);
        }

        if ($this->default_value !== null) {
            $writer->writeVarint($stream, 58);
            $writer->writeString($stream, $this->default_value);
        }

        if ($this->oneof_index !== null) {
            $writer->writeVarint($stream, 72);
            $writer->writeVarint($stream, $this->oneof_index);
        }

        if ($this->json_name !== null) {
            $writer->writeVarint($stream, 82);
            $writer->writeString($stream, $this->json_name);
        }

        if ($this->options !== null) {
            $writer->writeVarint($stream, 66);
            $writer->writeVarint($stream, $this->options->serializedSize($sizeContext));
            $this->options->writeTo($context);
        }

        if ($this->extensions !== null) {
            $this->extensions->writeTo($context);
        }

        return $stream;
    }

    /**
     * {@inheritdoc}
     */
    public function readFrom(\Protobuf\ReadContext $context)
    {
        $reader = $context->getReader();
        $length = $context->getLength();
        $stream = $context->getStream();

        $limit = ($length !== null)
            ? ($stream->tell() + $length)
            : null;

        while ($limit === null || $stream->tell() < $limit) {

            if ($stream->eof()) {
                break;
            }

            $key  = $reader->readVarint($stream);
            $wire = \Protobuf\WireFormat::getTagWireType($key);
            $tag  = \Protobuf\WireFormat::getTagFieldNumber($key);

            if ($stream->eof()) {
                break;
            }

            if ($tag === 1) {
                \Protobuf\WireFormat::assertWireType($wire, 9);

                $this->name = $reader->readString($stream);

                continue;
            }

            if ($tag === 3) {
                \Protobuf\WireFormat::assertWireType($wire, 5);

                $this->number = $reader->readVarint($stream);

                continue;
            }

            if ($tag === 4) {
                \Protobuf\WireFormat::assertWireType($wire, 14);

                $this->label = \google\protobuf\FieldDescriptorProto\Label::valueOf($reader->readVarint($stream));

                continue;
            }

            if ($tag === 5) {
                \Protobuf\WireFormat::assertWireType($wire, 14);

                $this->type = \google\protobuf\FieldDescriptorProto\Type::valueOf($reader->readVarint($stream));

                continue;
            }

            if ($tag === 6) {
                \Protobuf\WireFormat::assertWireType($wire, 9);

                $this->type_name = $reader->readString($stream);

                continue;
            }

            if ($tag === 2) {
                \Protobuf\WireFormat::assertWireType($wire, 9);

                $this->extendee = $reader->readString($stream);

                continue;
            }

            if ($tag === 7) {
                \Protobuf\WireFormat::assertWireType($wire, 9);

                $this->default_value = $reader->readString($stream);

                continue;
            }

            if ($tag === 9) {
                \Protobuf\WireFormat::assertWireType($wire, 5);

                $this->oneof_index = $reader->readVarint($stream);

                continue;
            }

            if ($tag === 10) {
                \Protobuf\WireFormat::assertWireType($wire, 9);

                $this->json_name = $reader->readString($stream);

                continue;
            }

            if ($tag === 8) {
                \Protobuf\WireFormat::assertWireType($wire, 11);

                $innerSize    = $reader->readVarint($stream);
                $innerMessage = new \google\protobuf\FieldOptions();

                $this->options = $innerMessage;

                $context->setLength($innerSize);
                $innerMessage->readFrom($context);
                $context->setLength($length);

                continue;
            }

            $extensions = $context->getExtensionRegistry();
            $extension  = $extensions ? $extensions->findByNumber(__CLASS__, $tag) : null;

            if ($extension !== null) {
                $this->extensions()->add($extension, $extension->readFrom($context, $wire));

                continue;
            }

            if ($this->unknownFieldSet === null) {
                $this->unknownFieldSet = new \Protobuf\UnknownFieldSet();
            }

            $data    = $reader->readUnknown($stream, $wire);
            $unknown = new \Protobuf\Unknown($tag, $wire, $data);

            $this->unknownFieldSet->add($unknown);

        }
    }

    /**
     * {@inheritdoc}
     */
    public function serializedSize(\Protobuf\ComputeSizeContext $context)
    {
        $calculator = $context->getSizeCalculator();
        $size       = 0;

        if ($this->name !== null) {
            $size += 1;
            $size += $calculator->computeStringSize($this->name);
        }

        if ($this->number !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->number);
        }

        if ($this->label !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->label->value());
        }

        if ($this->type !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->type->value());
        }

        if ($this->type_name !== null) {
            $size += 1;
            $size += $calculator->computeStringSize($this->type_name);
        }

        if ($this->extendee !== null) {
            $size += 1;
            $size += $calculator->computeStringSize($this->extendee);
        }

        if ($this->default_value !== null) {
            $size += 1;
            $size += $calculator->computeStringSize($this->default_value);
        }

        if ($this->oneof_index !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->oneof_index);
        }

        if ($this->json_name !== null) {
            $size += 1;
            $size += $calculator->computeStringSize($this->json_name);
        }

        if ($this->options !== null) {
            $innerSize = $this->options->serializedSize($context);

            $size += 1;
            $size += $innerSize;
            $size += $calculator->computeVarintSize($innerSize);
        }

        if ($this->extensions !== null) {
            $size += $this->extensions->serializedSize($context);
        }

        return $size;
    }

    /**
     * {@inheritdoc}
     */
    public function clear()
    {
        $this->name = null;
        $this->number = null;
        $this->label = null;
        $this->type = null;
        $this->type_name = null;
        $this->extendee = null;
        $this->default_value = null;
        $this->oneof_index = null;
        $this->json_name = null;
        $this->options = null;
    }

    /**
     * {@inheritdoc}
     */
    public function merge(\Protobuf\Message $message)
    {
        if ( ! $message instanceof \google\protobuf\FieldDescriptorProto) {
            throw new \InvalidArgumentException(sprintf('Argument 1 passed to %s must be a %s, %s given', __METHOD__, __CLASS__, get_class($message)));
        }

        $this->name = ($message->name !== null) ? $message->name : $this->name;
        $this->number = ($message->number !== null) ? $message->number : $this->number;
        $this->label = ($message->label !== null) ? $message->label : $this->label;
        $this->type = ($message->type !== null) ? $message->type : $this->type;
        $this->type_name = ($message->type_name !== null) ? $message->type_name : $this->type_name;
        $this->extendee = ($message->extendee !== null) ? $message->extendee : $this->extendee;
        $this->default_value = ($message->default_value !== null) ? $message->default_value : $this->default_value;
        $this->oneof_index = ($message->oneof_index !== null) ? $message->oneof_index : $this->oneof_index;
        $this->json_name = ($message->json_name !== null) ? $message->json_name : $this->json_name;
        $this->options = ($message->options !== null) ? $message->options : $this->options;
    }


}
