<?php
namespace Craft;

class CommerceVariantsField_VariantsFieldType extends BaseElementFieldType
{
    // Properties
    // =========================================================================

    protected $elementType = 'Commerce_Variant';

    // Public Methods
    // =========================================================================

    public function getName()
    {
        return Craft::t('Commerce Variants');
    }

    // Protected Methods
    // =========================================================================

    protected function getAddButtonLabel()
    {
        return Craft::t('Add a variant');
    }
}