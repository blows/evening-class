return @files;
}

sub slurp_file {
    my $file = shift;
    my $str   = "";
    local *F;
    if (!open (F,"<$file")) {
        return(undef);
    } else {
        local $/ = undef;
        $str = <F>;
        close(F);
    }
    return($str);
}

sub store_data {
    my %param  = @_;
    my $data   = $param{'data'};
    my $output = $param{'file'};

    open(OUTFILE,">$output") || die "\nCould not open $output ($@)\n\n";
    print OUTFILE $data;
    close(OUTFILE);
}
