#!/bin/bash

config_file="/etc/i2pd/i2pd.conf"
block_name="httpproxy"
outproxy_line="outproxy = http://exit.stormycloud.i2p"

if grep -q "\[$block_name\]" "$config_file"; then
    if grep -q "^outproxy =" "$config_file"; then
        sed -i "/\[$block_name\]/,/^$/s/^outproxy =.*/$outproxy_line/" "$config_file"
    else
        sed -i "/\[$block_name\]/a $outproxy_line" "$config_file"
    fi
else
    cat >> "$config_file" << EOL
[$block_name]
port = 4444
$outproxy_line
EOL
fi