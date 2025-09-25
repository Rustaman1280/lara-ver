#!/bin/bash

# Make sure public directory exists
mkdir -p public

# Copy assets if they don't exist
if [ ! -d "public/css" ]; then
    echo "CSS directory not found in public, this should exist"
fi

if [ ! -d "public/js" ]; then
    echo "JS directory not found in public, this should exist"
fi

if [ ! -d "public/vendor" ]; then
    echo "Vendor directory not found in public, this should exist"
fi

echo "Build completed"