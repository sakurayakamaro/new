// JavaScript Document
$(function(){$('div#toggle_header').click(function(){$(this).children().slideToggle("slow");});});
// Only show first elements
$(function(){$('div#toggle_header').next().children().hide();});