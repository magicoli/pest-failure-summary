<?php

describe("debug FailureSummaryExtension", function () {
    test("includes fails in summary", function () {
        expect(false)->toBeTrue("Debug failure to test FailureSummaryExtension");
    });

    test("ignore skip in summary", function () {
            expect(false)->toBeTrue("Debug failure to test FailureSummaryExtension");
    })->skip();

    test("ignore todo in summary", function () {
            expect(false)->toBeTrue("Debug failure to test FailureSummaryExtension");
    })->todo("will never do that");
});
