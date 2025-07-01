<?php

$name = 'Sovereign Alliance Oil & Gas LTD';

$addr = 'Powisland Drive, Derriford, Plymouth';

$phone = '+447492025160';
$whatsapp = '+447492025160';
$reg = '12549422';

$url = 'https://sovereignallianceltd.com';

$email = 'info@sovereignallianceltd.com';

$tawk = '<a href="https://wa.me/447492025160?text=Hello Sovereign Alliance Oil & Gas LTD. I want to make an enquiry" class="float" target="_blank">
            <i class="fab fa-whatsapp my-float"></i>
            <span class="notification-badge">2</span>
            <span class="tooltip-balloon">Contact Us</span>
        </a>

        <style>
        .float {
            position: fixed;
            width: 60px;
            height: 60px;
            bottom: 100px;
            right: 30px;
            background-color: #25d366;
            color: #FFF;
            border-radius: 50%;
            text-align: center;
            font-size: 30px;
            z-index: 100;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);
            animation: jump 1s ease-in-out 1;
            transition: all 0.3s ease;
        }

        .float:hover {
            transform: scale(1.1);
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.4);
        }

        .my-float {
            margin-top: 15px;
            display: inline-block;
        }

        .notification-badge {
            position: absolute;
            top: -5px;
            right: -5px;
            background-color: #ff0000;
            color: white;
            border-radius: 50%;
            width: 22px;
            height: 22px;
            font-size: 12px;
            font-weight: bold;
            display: flex;
            align-items: center;
            justify-content: center;
            animation: pulse 2s infinite;
        }

        .tooltip-balloon {
            position: absolute;
            left: -110px;
            top: 50%;
            transform: translateY(-50%);
            background-color: white;
            color: #333;
            padding: 5px 10px;
            border-radius: 20px;
            font-size: 14px;
            font-weight: bold;
            box-shadow: 0 3px 10px rgba(0, 0, 0, 0.2);
            opacity: 1;
            transition: all 0.3s ease;
            width: 100px;
            text-align: center;
        }

        .tooltip-balloon:after {
            content: "";
            position: absolute;
            right: -10px;
            top: 50%;
            transform: translateY(-50%);
            border-width: 5px;
            border-style: solid;
            border-color: transparent transparent transparent white;
        }

        .float:hover .tooltip-balloon {
            opacity: 1;
            left: -120px;
        }

        @keyframes jump {

            0%,
            100% {
                transform: translateY(0);
            }

            50% {
                transform: translateY(-20px);
            }
        }

        @keyframes pulse {
            0% {
                transform: scale(1);
            }

            50% {
                transform: scale(1.2);
            }

            100% {
                transform: scale(1);
            }
        }
        </style>';
